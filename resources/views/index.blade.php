@extends('layouts.default')

@section('page-content')
<link rel="stylesheet" href="/css/style.css">
    <section class="relative min-h-screen flex items-center">
      <div class="container mx-auto text-center">
						<h2 class="text-4xl sm:text-8xl">Minimalist <span class="text-pink-500">shop</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">from Lisnic Roman</h3>
          </div>

          <div class="absolute bottom-0 left-0 right-0 p-20">
              <p class="text-center">Sroll to see products</p>
          </div>
    </section>
    <section class="py-20">
      <div class="" style="margin-left:auto;margin-right:auto;width: 13.5em;">
        <h3 class="text-4xl font-bold text-white mb-4 hover:text-pink-500 transition">Smartphones</h3>
      </div>
    </section>
    <div class="container mx-auto flex" style="justify-content:space-around;">
    <section class="products">
            <figure class="card card-product border-0 rounded hover:bg-gray transition">
                <a href="#"><img class="card-image" src="{{ asset('img/sam1.webp') }}" alt="Samsung" title="Samsung Galaxy S20+ 8/128ГБ (G985F)" width="345" height="345" /></a>
                  <figcaption class="info-wrap">
                    <h3 class="title ">
                      <a href="#" title="Samsung Galaxy S20+ 8/128ГБ (G985F)">Samsung Galaxy S20+ 8/128ГБ (G985F)</a>
                    </h3>
                  </figcaption>
                        <span class="price">
                          <b class="flex h-9">700 $</b>
                        </figure>
                        <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                        <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                  </section>

                <section class="products">
              <figure class="card card-product border-0" style="opacity: .8">
            <a href="#"><img class="card-image" src="{{ asset('img/iph1.webp') }}" alt="Apple" title="Apple iPhone 12 Pro Max 128GB, Gold" width="345" height="345" /></a>
        <figcaption class="info-wrap">
      <h3 class="title flex">
    <a href="#" title="Apple iPhone 12 Pro Max 128GB, Gold">Apple iPhone 12 Pro Max 128GB, Gold</a>
    </h3>
        </figcaption>
          <span class="price">
            <b class="flex h-9">985 $</b>
              </figure>
              <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
              <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
            </section>

            <section class="products">
                    <figure class="card card-product border-0" style="opacity: .8">
                        <a href="#"><img class="card-image" src="{{ asset('img/xia1.webp') }}" alt="Xiaomi" title="Xiaomi Mi 10T Pro 8GB 128GB, Black" width="345" height="345" /></a>
                          <figcaption class="info-wrap">
                            <h3 class="title flex">
                              <a href="#" title="Xiaomi Mi 10T Pro 8GB 128GB, Black">Xiaomi Mi 10T Pro 8GB 128GB, Black</a>
                            </h3>
                          </figcaption>
                                <span class="price">
                                  <b class="flex h-9">490 $</b>
                                </figure>
                                <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                                <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                              </section>
                              <section class="products">
                                      <figure class="card card-product border-0" style="opacity: .8">
                                          <a href="#"><img class="card-image" src="{{ asset('img/one1.webp') }}" alt="OnePlus" title="OnePlus 9 Pro 8 GB / 128 GB Gray" width="345" height="345" /></a>
                                            <figcaption class="info-wrap">
                                              <h3 class="title flex">
                                                <a href="#" title="OnePlus 9 Pro 8 GB / 128 GB Gray">OnePlus 9 Pro 8 GB / 128 GB Gray</a>
                                              </h3>
                                            </figcaption>
                                                  <span class="price">
                                                    <b class="flex h-9">620 $</b>
                                                  </figure>
                                                  <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                                                  <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                                                </section>
                                </div>
                                <section class="py-20">
                                  <div class="" style="margin-left:auto;margin-right:auto;width: 13.5em;">
                                    <h3 class="text-4xl font-bold text-white mb-4 h-12 hover:text-pink-500 transition">Gadget</h3>
                                  </div>
                                </section>
                                <div class="container mx-auto flex" style="justify-content:space-around;">
                                <section class="products">
                                        <figure class="card card-product border-0 rounded hover:bg-gray transition">
                                            <a href="#"><img class="card-image" src="{{ asset('img/watch1.webp') }}" alt="Apple" title="Apple Watch SE 44mm, Space Gray / Black"  width="345" height="345" /></a>
                                              <figcaption class="info-wrap">
                                                <h3 class="title ">
                                                  <a href="#" title="Apple Watch SE 44mm, Space Gray / Black">Apple Watch SE 44mm, Space Gray / Black</a>
                                                </h3>
                                              </figcaption>
                                                    <span class="price">
                                                      <b class="flex h-9">330 $</b>
                                                    </span>
                                                    </figure>
                                                    <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                                                    <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                                              </section>

                                            <section class="products">
                                          <figure class="card card-product border-0" style="opacity: .8">
                                        <a href="#"><img class="card-image" src="{{ asset('img/ps1.webp') }}" alt="Sony" title="Sony PlayStation 5 Digital Edition White" width="345" height="345" /></a>
                                    <figcaption class="info-wrap">
                                  <h3 class="title flex">
                                <a href="#" title="Sony PlayStation 5 Digital Edition White">Sony PlayStation 5 Digital Edition White</a>
                                </h3>
                                    </figcaption>
                                      <span class="price">
                                        <b class="flex h-9">845 $</b>
                                          </figure>
                                          <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                                          <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                                        </section>

                                        <section class="products">
                                                <figure class="card card-product border-0" style="opacity: .8">
                                                    <a href="#"><img class="card-image" src="{{ asset('img/kol1.webp') }}" alt="Sven" title="Sven PS-750, Black" width="345" height="345" /></a>
                                                      <figcaption class="info-wrap">
                                                        <h3 class="title flex">
                                                          <a href="#" title="Sven PS-750, Black">Sven PS-750, Black</a>
                                                        </h3>
                                                      </figcaption>
                                                            <span class="price">
                                                              <b class="flex h-9">125 $</b>
                                                            </figure>
                                                            <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                                                            <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                                                          </section>
                                                          <section class="products">
                                                                  <figure class="card card-product border-0" style="opacity: .8">
                                                                      <a href="#"><img class="card-image" src="{{ asset('img/cons1.webp') }}" alt="Powkiddy" title="Powkiddy Q90, Blue" width="345" height="345" /></a>
                                                                        <figcaption class="info-wrap">
                                                                          <h3 class="title flex">
                                                                            <a href="#" title="Powkiddy Q90, Blue">Powkiddy Q90, Blue</a>
                                                                          </h3>
                                                                        </figcaption>
                                                                              <span class="price">
                                                                                <b class="flex h-9">245 $</b>
                                                                              </figure>
                                                                              <a href="#" class="text bg-pink-500  py-2 px-4 rounded hover:bg-purple-500 transition">Add to card</a>
                                                                              <a href="#" class="text bg-pink-500  py-2 px-2 rounded hover:bg-purple-500 transition">Add to favorites</a>
                                                                            </section>
                                                                            
@endsection
