@extends('layouts.app')

@section('title', 'Crear Nuevo Curso')

@section('content')
<div class="form-container-card">
    <div class="form-header">
        <h2>Crear Nuevo Curso</h2>
        <p>Completa la información para ofertar un nuevo curso en la plataforma.</p>
    </div>
    <form action="{{ route('courses.store') }}" method="POST" class="create-course-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="course-title">Título del Curso</label>
            <input type="text" id="course-title" name="title" placeholder="Ej: Introducción a la Programación con Python" required>
        </div>
        <div class="form-group">
            <label for="course-description">Descripción</label>
            <textarea id="course-description" name="description" rows="5" placeholder="Describe de qué trata el curso, los temas principales, a quién va dirigido, etc." required></textarea>
        </div>
        <div class="form-group">
            <label>Imagen de Portada del Curso</label>
            <div class="file-upload-wrapper">
                <input type="file" id="course-image" name="image" class="file-upload-input" accept="image/*">
                <div class="file-upload-preview" id="image-preview">
                    <span class="las la-cloud-upload-alt"></span>
                    <p>Arrastra y suelta una imagen o haz clic para seleccionar</p>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="course-category">Categoría</label>
                <select id="course-category" name="category">
                    <option>Matemáticas</option>
                    <option>Física</option>
                    <option>Química</option>
                    <option>Biología</option>
                    <option>Programación</option>
                    <option>Idiomas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="course-subject">Materia / Tema Específico</label>
                <input type="text" id="course-subject" name="subject" placeholder="Ej: Cálculo I, Termodinámica" required>
            </div>
            
            <div class="form-group">
                <label for="course-difficulty">Dificultad</label>
                <select id="course-difficulty" name="difficulty">
                    <option>Principiante</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit-course">Crear Curso</button>
        </div>

    </form>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/crearCurso.js') }}"></script>
@endsection