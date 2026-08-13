<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Book extends Model {
    protected $fillable = ['title', 'author', 'category', 'year', 'borrowed_to', 'return_due_date'];

    public function getSituationAttribute(): string {
        if (empty($this->borrowed_to)) return 'Disponível';
        $dueDate = Carbon::parse($this->return_due_date)->startOfDay();
        return ($dueDate->isPast() && !$dueDate->isToday()) ? 'Atrasado' : 'Emprestado';
    }
}
