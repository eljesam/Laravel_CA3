@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                About Me
            </h1>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img class="rounded-lg" src="https://i.imgur.com/yPl3RS6.jpeg" height="500" alt="" referrerpolicy="no-referrer">
        </div>

        <div class="m-auto sm:m-auto text-center w-4/5 block">
            <h2 class="my-5 text-4xl font-extrabold text-white py-6 px-6 bg-secondary rounded-3xl">
                A Passionate Student of Software Development and Dinosaurs
            </h2>
            
            <p class="py-8 text-gray-500 text-xl">
                Hey there! Welcome to my corner of the internet—I'm thrilled you've stumbled upon my blog dedicated to the epic world of dinosaurs. I'm a passionate second-year college student diving headfirst into the realms of software development, but my heart truly belongs to the Mesozoic Era. Ever since I was a kid, I've been captivated by these prehistoric giants, spending countless hours devouring books, documentaries, and museum exhibits to satisfy my insatiable curiosity.
            </p>

            <p class="font-extrabold text-gray-600 text-xl pb-9">
                As I navigate the intricate world of software development, I've found solace in combining my love for technology with my fascination for dinosaurs. Through my blog, I aim to share the wonders of paleontology with fellow enthusiasts, offering a blend of scientific discoveries, speculative musings, and technological innovations that bring these ancient creatures to life in the digital age. So, join me on this thrilling journey as we explore the intersection of software development and paleontology, uncovering the mysteries of the past while forging a path towards the future.
            </p>

        </div>
    </div>
    <div class="text-center p-15 bg-accent text-white">
        <h2 class="font-extrabold block text-4xl py-1"> 
            Content I highly recommend
        </h2>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <iframe class="video" src="https://www.youtube.com/embed/JDnQmBFxIfE?si=aCYhzKvYYESj3ImI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     
        <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-bold py-10 rounded-3xl bg-secondary text-white text-center">
            PBS Eons
        </h2> 
        <p class="py-8 text-gray-500 text-xl">
            PBS Eons is a fantastic YouTube channel that delves into the history of life on Earth, exploring the incredible stories of ancient creatures and the forces that shaped our planet. From the rise of dinosaurs to the evolution of mammals, each episode is a captivating journey through time, offering a blend of scientific insights and captivating visuals that will leave you in awe of our planet's prehistoric past.
        </p>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-bold py-10 rounded-3xl text-center text-white bg-secondary">
            The Common Descent Podcast
        </h2> 
        <p class="py-8 text-gray-500 text-xl">
            The Common Descent Podcast is a must-listen for anyone fascinated by the world of paleontology. Hosted by two passionate scientists, this podcast covers a wide range of topics, from the latest dinosaur discoveries to the intricacies of evolutionary biology. With engaging discussions, interviews, and deep dives into scientific research, The Common Descent Podcast offers an enriching experience that will expand your knowledge of prehistoric life.
        </p>
        </div>
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/029BQDSLPNMMYvETz6hJJl?utm_source=generator&theme=0&t=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
    @endsection
