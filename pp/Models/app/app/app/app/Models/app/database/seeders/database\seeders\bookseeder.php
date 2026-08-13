<?php
namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BookSeeder extends Seeder {
    public function run(): void {
        $books = [
            ['title' => 'Dom Casmurro', 'author' => 'Machado de Assis', 'year' => 1899, 'category' => 'Literatura', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'Memórias Póstumas de Brás Cubas', 'author' => 'Machado de Assis', 'year' => 1881, 'category' => 'Literatura', 'borrowed_to' => 'Ana Ribeiro', 'return_due_date' => Carbon::today()->addDays(12)->format('Y-m-d')],
            ['title' => 'Vidas Secas', 'author' => 'Graciliano Ramos', 'year' => 1938, 'category' => 'Literatura', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'Grande Sertão: Veredas', 'author' => 'João Guimarães Rosa', 'year' => 1956, 'category' => 'Literatura', 'borrowed_to' => 'Carlos Menezes', 'return_due_date' => Carbon::today()->subDays(6)->format('Y-m-d')],
            ['title' => 'O Cortiço', 'author' => 'Aluísio Azevedo', 'year' => 1890, 'category' => 'Literatura', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'Iracema', 'author' => 'José de Alencar', 'year' => 1865, 'category' => 'Literatura', 'borrowed_to' => 'Beatriz Nunes', 'return_due_date' => Carbon::today()->addDays(3)->format('Y-m-d')],
            ['title' => 'A Hora da Estrela', 'author' => 'Clarice Lispector', 'year' => 1977, 'category' => 'Literatura', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'Os Sertões', 'author' => 'Euclides da Cunha', 'year' => 1902, 'category' => 'Referência', 'borrowed_to' => 'Daniel Prado', 'return_due_date' => Carbon::today()->subDays(21)->format('Y-m-d')],
            ['title' => 'Pedagogia do Oprimido', 'author' => 'Paulo Freire', 'year' => 1968, 'category' => 'Didático', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'Álgebra Linear', 'author' => 'Elon Lages Lima', 'year' => 1995, 'category' => 'Didático', 'borrowed_to' => 'Eduarda Salles', 'return_due_date' => Carbon::today()->addDays(30)->format('Y-m-d')],
            ['title' => 'Curso de Análise, Volume 1', 'author' => 'Elon Lages Lima', 'year' => 1976, 'category' => 'Didático', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'Fundamentos de Física, Volume 1', 'author' => 'David Halliday', 'year' => 1960, 'category' => 'Didático', 'borrowed_to' => 'Felipe Tavares', 'return_due_date' => Carbon::today()->subDays(2)->format('Y-m-d')],
            ['title' => 'Reinações de Narizinho', 'author' => 'Monteiro Lobato', 'year' => 1931, 'category' => 'Infantil', 'borrowed_to' => null, 'return_due_date' => null],
            ['title' => 'A Menina que Roubava Livros', 'author' => 'Markus Zusak', 'year' => 2005, 'category' => 'Infantil', 'borrowed_to' => 'Gabriela Rocha', 'return_due_date' => Carbon::today()->subDays(45)->format('Y-m-d')],
            ['title' => 'Dicionário Houaiss', 'author' => 'Antônio Houaiss', 'year' => 2001, 'category' => 'Referência', 'borrowed_to' => null, 'return_due_date' => null],
        ];
        foreach ($books as $book) { Book::create($book); }
    }
}
