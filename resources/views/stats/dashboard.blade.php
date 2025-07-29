@extends('layouts.app')

@section('tittle', 'Dashboard')

@section('content')

@if (session('status'))
    <div class="notification-bar">
        <span class="las la-check-circle"></span>
        {{ session('status') }}
    </div>
@endif

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
            <a href="#" class="course-card">
                <img src="{{ asset('img/biologia.jpg') }}" alt="Curso de Biología">
                <div class="card-overlay">
                    <h2>Biología</h2>
                </div>
            </a>
            <a href="#" class="course-card">
                <img src="{{ asset('img/matematicas.jpg') }}" alt="Curso de Matemáticas">
                <div class="card-overlay">
                    <h2>Matemáticas</h2>
                </div>
            </a>
            <a href="#" class="course-card">
                <img src="{{ asset('img/fisica.jpg') }}" alt="Curso de Física">
                <div class="card-overlay">
                    <h2>Física</h2>
                </div>
            </a>
            <a href="#" class="course-card">
                <img src="{{ asset('img/quimica.jpg') }}" alt="Curso de Química">
                <div class="card-overlay">
                    <h2>Química</h2>
                </div>
            </a>
        </div>
    </section>
    
</div>
@endsection