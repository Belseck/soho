@extends('layouts.app')

@section('content')
    <section class="tab cover">
        <div class="content">
            <div class="info">
                <h1 class="title text-white margin-0">Nos especializamos en</h1>
                <h1 class="strong-title text-green margin-0">interfaces digitales que los usuarios aman</h1>
                <button class="btn btn-green margin-top-5 bold padding-x-5 padding-y-2">HABLEMOS DE TU PROYECTO</button>
            </div>
            <div class="live bg-black padding-y-2 text-center">
                <img src="{{ asset("/images/img5.png") }}" alt="">
                <p class="text-white">
                    <b>EN DIRECTO</b> - SOHO est&aacute; presente en el <b>DIGITALBANK MONTEVIDEO</b>. "Experiencia de Usuario" por Alvaro A&ntilde;on (SEO de Soho).
                </p>
                <button class="btn btn-green bold margin-x-1">VER EVENTO</button>
                <button class="btn btn-black bold margin-x-1">PR&Oacute;XIMOS EVENTOS</button>
            </div>
        </div>
    </section>
    <section class="tab bg-gray-1">
        <div class="content">
            <div class="w-row">
                <div class="column text-center padding-y-3 padding-x-2">
                    <h1 class="bold text-white">17 a&ntilde;os de experiencia en pos de tu proyecto<hr/></h1>
                    <p class="sub-title text-gray margin-x-5">Especializados desde 1996 en usabilidad, experiencia del usuario (UX) y
                        dise&ntilde;o de
                        experiencias de proyectos digitales. Aportamos estrategia e innovaci&oacute;n centrada en el usuario y los
                        objetivos de negocio de tu proyecto. Cotrabajando mejoraremos tu tasa de conversi&oacute;n, KPI's, ROI y
                        los
                        resultados de tu actual publicidad PPC (pay per click).</p>
                </div>
            </div>
            <div class="w-row w-sm-1 w-md-3">
                <div class="column bg-gray-2 text-center padding-y-5 padding-x-3">
                    <h2 class="title text-green">Estrategia, usabilidad & ux</h2>
                    <p class="sub-title text-gray">Te ofrecemos excelente usabilidad y experiencia del usuario en tu
                        proyecto,
                        junto
                        a una visi&oacute;n innovadora</p>
                </div>
                <div class="column bg-gray-3 text-center padding-y-5 padding-x-3">
                    <h2 class="title text-green">Mejoramos la experiencia</h2>
                    <p class="sub-title text-gray">Tangibilizamos tu proyecto digital a trav&eacute;s de un dise&ntilde;o centrado en el
                        usuario y
                        t&eacute;cnicas avanzadas</p>
                </div>
                <div class="column bg-blue text-center padding-y-5 padding-x-3">
                    <h2 class="title text-green">Medici&oacute;n continua de objetivos</h2>
                    <p class="sub-title text-gray">Implementaci&oacute;n, testing con usuarios y medici&oacute;n continua son necesarias
                        para
                        garantizar el &eacute;xito de tu proyecto</p>
                </div>
            </div>
            <div class="w-row">
                <div class="column text-center padding-y-3 padding-x-2">
                    <h1 class="bold text-white">Proyectos destacados<hr/></h1>
                    <p class="sub-title text-gray margin-x-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean commodo
                        ligula
                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus
                        mus.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="tab projects">
        <div class="content">
            <projects/>
        </div>
    </section>
@endsection
