@extends('shared.layout')
@section('title', 'title')
@section('content')
<div id="content">
    <div class="container">

        <pre>
            <code>
                namespace App\Console;
                
                use Illuminate\Console\Scheduling\Schedule;
                use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
                
                class Kernel extends ConsoleKernel
                {
                    /**
                     * The Artisan commands provided by your application.
                     *
                     * @var array
                     */
                    protected $commands = [
                        //
                    ];
                
                    /**
                     * Define the application's command schedule.
                     *
                     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
                     * @return void
                     */
                    protected function schedule(Schedule $schedule)
                    {
                        // $schedule->command('inspire')
                        //          ->hourly();
                    }
                
                    /**
                     * Register the commands for the application.
                     *
                     * @return void
                     */
                    protected function commands()
                    {
                        $this->load(__DIR__.'/Commands');
                
                        require base_path('routes/console.php');
                    }
                }
        </code>
    </pre>
    </div>

    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/header_one.jpg')}}" alt="Primeiro Slide">
    <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
    </div>
</div>
<div class="carousel-item">
    <img class="d-block w-100" src="{{ asset('img/header_two.jpg')}}" alt="Segundo Slide">
    <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
    </div>
</div>
<div class="carousel-item">
    <img class="d-block w-100" src="{{ asset('img/rabbit.gif')}}" alt="Terceiro Slide">
    <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
    </div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
</a>
</div> --}}
</div>
@endsection