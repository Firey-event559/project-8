<x-layout>

    <body class="services_body">



        <main>
            <section class="services">
                <h2>ONZE SERVICE</h2>
                <p>Dit zijn alle diensten die wij leveren.</p>
                <div class="services-containers">
                    <div class="service-box">
                        <h3>Graphic Design</h3>
                        <p>Ons bedrijf biedt grafisch ontwerp diensten aan, zoals logo's, branding, webdesign,
                            printmaterialen en visuele content.</p>
                    </div>
                    <div class="service-box">
                        <h3>Software Development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit dignissimos, facere
                            consectetur,
                            ipsam delectus voluptatibus reiciendis quas,</p>
                    </div>
                    <div class="service-box">
                        <h3>Product Design</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis nihil provident ipsa ut
                            optio
                            sunt tenetur vitae excepturi consequuntur est,</p>
                    </div>
                    <div class="service-box">
                        <h3>Blog Writing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, dolorum dolore,
                        </p>
                    </div>

                    <div class="service-box">
                        <h3>Social Marketing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ab quo tempore?</p>
                    </div>
                    <div class="service-box">
                        <h3>IT Services</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, accusantium?</p>
                    </div>
                </div>
            </section>
            <div class="container_services">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header bg-white" id="headingOne">
                            <button data-mdb-collapse-init class="accordion-button  bg-dark text-light" type="button"
                                data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                What is Lorem Ipsum?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or
                                overriding our default variables. It's also worth noting that just about any HTML
                                can go within the <strong>.accordion-body</strong>, though the transition does
                                limit overflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button data-mdb-collapse-init class="accordion-button collapsed bg-dark text-light"
                                type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Where does it come from?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                default, until the collapse plugin adds the appropriate classes that we use to
                                style each element. These classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any of this with custom CSS
                                or overriding our default variables. It's also worth noting that just about any
                                HTML can go within the <strong>.accordion-body</strong>, though the transition
                                does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button data-mdb-collapse-init class="accordion-button collapsed bg-dark text-light"
                                type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Is it safe to use Lorem Ipsum?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-mdb-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and
                                hiding via CSS transitions. You can modify any of this with custom CSS or
                                overriding our default variables. It's also worth noting that just about any HTML
                                can go within the <strong>.accordion-body</strong>, though the transition does
                                limit overflow.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="img-service-page">
           
            <img src="{{ Vite::asset('resources/assets/certificaat2.png') }}"  alt="Laptop reparatie image"><br>
            <img src="{{ Vite::asset('resources/assets/Certificaat1.png') }}"  alt="Laptop reparatie image"><br>
            <img src="{{ Vite::asset('resources/assets/Certificaat3.png') }}"  alt="Laptop reparatie image"><br>
        </div>

        </main>
        <script>
        const accordionItems = document.querySelectorAll('.accordion-item');


        accordionItems.forEach((item) => {
            const accordionHeader = item.querySelector('.accordion-header');
            const accordionCollapse = item.querySelector('.accordion-collapse');


            accordionHeader.addEventListener('click', () => {

                accordionCollapse.classList.toggle('show');
            });
        });
        </script>

    </body>
</x-layout>