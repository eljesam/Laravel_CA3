@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to learn more about dinosaurs?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-secondary text-white py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img class="rounded-lg" src="https://m.media-amazon.com/images/I/71Anp69Sb9L._AC_UF1000,1000_QL80_.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Explore the Lost World of Dinosaurs
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Welcome to our prehistoric paradise, where you can journey back in time to the Mesozoic Era and discover the fascinating world of dinosaurs. Immerse yourself in the wonders of ancient life, from the towering Tyrannosaurus Rex to the majestic Brachiosaurus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Our website is your ultimate destination for all things dinosaur-related. Whether you're a seasoned paleontologist or a curious amateur, you'll find a treasure trove of information, articles, videos, and interactive exhibits that will transport you to a time when giants roamed the Earth. Join us on this incredible journey of exploration and discovery!
            </p>

            <a 
                href="/about"
                class="uppercase bg-secondary text-white text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-accent text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm Passionate about...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Paleontology
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Evolution
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Fossils
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Conservation
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Explore our latest discoveries and insights in the ever-evolving world of paleontology. From groundbreaking fossil finds to cutting-edge research, our recent posts keep you at the forefront of dinosaur science. Dive into fascinating articles, uncovering the mysteries of ancient life, and stay up-to-date with the latest developments in the field. Whether you're a seasoned enthusiast or a curious newcomer, there's always something new to learn and explore in the realm of paleontology.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-accent text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Fossil Fashion: How Some Dinosaurs Sported Feathers Before Birds
                </span>

                <h3 class="text-xl font-bold py-10">
                    Dive into the fascinating world of paleo-fashion as we explore how some dinosaurs rocked feathers long before birds took to the skies. From the iconic Archaeopteryx to the fearsome Tyrannosaurus Rex, discover the diverse array of feathered dinosaurs and unravel the mysteries behind their stylish adornments. Join us on a journey through time as we uncover the evolution of fossil fashion and its implications for our understanding of prehistoric life.
                </h3>

                <a 
                    href="/blog/fossil-fashion-how-some-dinosaurs-sported-feathers-before-birds-2"
                    class="uppercase bg-secondary border-2 border-primary text-white text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img class="rounded-lg" src="https://scitechdaily.com/images/Small-Feathered-Dinosaur-Art-Concept.jpg" alt="">
        </div>
    </div>
@endsection