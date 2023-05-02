<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>::.. ACADEMICA ..::</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">::.. SISTEMA ACADEMICO ..::</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" @click="abrirFormulario('docente')">Docentes</a>
                            <a class="nav-link" @click="abrirFormulario('alumno')">Alumnos</a>
                            <a class="nav-link" @click="abrirFormulario('materia')">Materias</a>
                            <a class="nav-link" @click="abrirFormulario('matricula')">Matricula</a>
                            <a class="nav-link" @click="abrirFormulario('inscripcion')">Inscripcion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="appSistema">
                <docente ref="docente" v-show="forms['docente'].mostrar"></docente>
                <materia ref="materia" v-show="forms['materia'].mostrar"></materia>
                <alumno ref="alumno" v-show="forms['alumno'].mostrar"></alumno>
                <matricula ref="matricula" v-show="forms['matricula'].mostrar"></matricula>
                <inscripcion ref="inscripcion" v-show="forms['inscripcion'].mostrar"></inscripcion>
             </div>
        </div>  
        @vite('resources/js/app.js')
    </body>
</html>
