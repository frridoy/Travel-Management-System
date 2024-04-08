@extends('Frontend.master')
@section('content')
    <br> <br> <br>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


        <style>
            body {
                background-color: #f8f9fa;
                color: #495057;
            }

            .section-title {
                color: #007bff;
            }

            .about-img {
                border-radius: 15px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            }

            .brand-feature {
                border: 1px solid #dee2e6;
                border-radius: 10px;
                padding: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>

        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img class="img-fluid about-img" src="{{ asset('assests/images/about us.jpg') }}" alt="About Image">
                    </div>
                    <div class="col-md-6">
                        <div class="section-title mb-4">
                            <h2 class="h1">Who Are We?</h2>
                        </div>
                        <p class="lead fs-4 text-secondary mb-4">We help people build incredible brands and superior
                            products.
                            Our perspective is to furnish outstanding captivating services.</p>
                        <div class="brand-feature">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3">Versatile Brand</h4>
                                    <p class="text-secondary mb-0">We are crafting a digital method that subsists life
                                        across
                                        all mediums.</p>
                                </div>
                            </div>
                        </div>
                        <div class="brand-feature">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3">Digital Agency</h4>
                                    <p class="text-secondary mb-0">We believe in innovation by merging primary with
                                        elaborate ideas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
