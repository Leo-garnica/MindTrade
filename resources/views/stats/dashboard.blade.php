@extends('layouts.app')

@section('title', 'Dashboard de Cursos')

@section('content')
<div class="dashboard-grid">
    <aside class="left-panel">
        <div class="ranking-card">
            <h3>Ranking</h3>
            <ul>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
            </ul>
        </div>
        <div class="quote-card">
            <p>“La verdadera fuerza no proviene del cuerpo sino de la voluntad inquebrantable”</p>
        </div>
    </aside>

    <section class="courses-panel">
        <div class="courses-grid">
            <a href="#" class="course-card"><img src="{{ asset('img/biologia.jpg') }}" alt="Curso"><div class="card-overlay"><h2>Biología</h2></div></a>
            <a href="#" class="course-card"><img src="{{ asset('img/matematicas.jpg') }}" alt="Curso"><div class="card-overlay"><h2>Matemáticas</h2></div></a>
            <a href="#" class="course-card"><img src="{{ asset('img/fisica.jpg') }}" alt="Curso"><div class="card-overlay"><h2>Física</h2></div></a>
            <a href="#" class="course-card"><img src="{{ asset('img/quimica.jpg') }}" alt="Curso"><div class="card-overlay"><h2>Química</h2></div></a>
        </div>
    </section>
</div>
@endsection