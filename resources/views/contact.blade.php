@extends('layouts.app')

@section('content')
    <!-- Contact forms -->
    <section class="bg-body-tertiary pb-sm-3 pb-md-4 pb-lg-5 pb-1" style="margin-top: -110px; padding-top: 110px">
        <div class="mb-xxl-3 container py-5">
            <!-- Page title -->
            <h1 class="pb-sm-3 mt-lg-3 mt-xl-4 pb-2 text-center">
                Contact our specialists
            </h1>

            <!-- Forms wrapper -->
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-9 col-xl-8">
                    <div class="tab-content bg-body rounded-5 py-sm-4 px-sm-5 px-4 py-3">
                        <p class="mx-auto py-3 text-center" style="max-width: 450px">
                            Fill out the form below and we will reply within 24 hours. You may also
                            directly reach out to us at
                            <a class="text-decoration-none" href="mailto:info@bisdos.com">
                                info@bisdos.com
                            </a>
                        </p>

                        <!-- Customers form -->
                        <div class="tab-pane fade show active" id="customers" role="tabpanel"
                            aria-labelledby="customers-tab">
                            <form class="needs-validation" action="{{ route('contactus.submit') }}" method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-md-6 position-relative">
                                        <label for="first_name" class="form-label">First name *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="first_name" name="first_name" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your first name!
                                        </div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="last_name" class="form-label">Last name *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="last_name" name="last_name" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your last name!
                                        </div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control form-control-lg rounded-pill"
                                            id="email" name="email" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your email address!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <input type="tel" class="form-control form-control-lg rounded-pill"
                                            id="phone" name="phone" placeholder="+94 __ ___ ____" />
                                    </div>
                                    <div class="col-12 position-relative">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea class="form-control form-control-lg rounded-6" name="message" id="message" rows="5" required=""></textarea>
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Write your message!
                                        </div>
                                    </div>
                                    <div class="col-12 pb-3 pt-2 text-center">
                                        <button type="submit" class="btn btn-lg btn-dark rounded-pill">
                                            Send message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact info -->
    <section class="mt-xxl-3 my-xxl-3 py-sm-2 py-md-3 py-lg-4 py-xl-5 container py-1 pt-5">
        <div class="row row-cols-1 row-cols-sm-3 gy-4 gy-sm-0 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5 pt-1">
            <div class="col mb-sm-0 mb-2 text-center">
                <i class="ci-phone-outgoing bg-dark fs-4 rounded-circle d-inline-flex d-none-dark mb-3 p-3 text-white"></i>
                <i
                    class="ci-phone-outgoing bg-body-secondary fs-4 rounded-circle d-none d-inline-flex-dark mb-3 p-3 text-white"></i>
                <h3 class="text-body fs-sm fw-normal mb-2">Call us directly</h3>
                <div class="nav animate-underline justify-content-center">
                    <a class="nav-link animate-target text-dark-emphasis fs-base p-0" href="tel:+94755620353">
                        +94&nbsp;75&nbsp;562&nbsp;0353
                    </a>
                </div>
            </div>
            <div class="col mb-sm-0 mb-2 text-center">
                <i class="ci-mail bg-dark fs-4 rounded-circle d-inline-flex d-none-dark mb-3 p-3 text-white"></i>
                <i class="ci-mail bg-body-secondary fs-4 rounded-circle d-none d-inline-flex-dark mb-3 p-3 text-white"></i>
                <h3 class="text-body fs-sm fw-normal mb-2">Send us a message</h3>
                <div class="nav animate-underline justify-content-center">
                    <a class="nav-link animate-target text-dark-emphasis fs-base p-0" href="mailto:info@bisdos.com">
                        info@bisdos.com
                    </a>
                </div>
            </div>
            <div class="col text-center">
                <i class="ci-help-circle bg-dark fs-4 rounded-circle d-inline-flex d-none-dark mb-3 p-3 text-white"></i>
                <i
                    class="ci-help-circle bg-body-secondary fs-4 rounded-circle d-none d-inline-flex-dark mb-3 p-3 text-white"></i>
                <h3 class="text-body fs-sm fw-normal mb-2">Looking for support?</h3>
                <div class="nav animate-underline justify-content-center">
                    <a class="nav-link animate-target text-dark-emphasis fs-base p-0" href="/contact">
                        Help Center
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Store locations + Map in lightbox -->
    {{-- <section class="py-sm-2 py-md-3 py-lg-4 py-xl-5 my-xxl-3 container py-1">
        <div class="row row-cols-1 row-cols-md-2 g-0 rounded-5 my-5 overflow-hidden">
            <!-- Map -->
            <div class="col position-relative">
                <div class="ratio ratio-4x3"></div>
                <img src="assets/img/blog/grid/v2/video01.jpg"
                    class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image" />
            </div>

            <!-- Contact details -->
            <div class="col bg-body-tertiary order-md-1 px-xl-5 px-4 py-5">
                <div class="py-md-4 py-lg-5 px-md-4 px-lg-5">
                    <h1 class="pb-sm-3 pb-lg-0 mb-md-4 mb-lg-5 pb-2">Our stores</h1>
                    <ul class="list-unstyled pb-sm-2 mb-0">
                        <li class="lh-lg">
                            New York 11741, USA
                            <br />
                            396 Lillian Bolavandy, Holbrook
                        </li>
                        <li class="nav">
                            <a class="nav-link animate-underline fw-semibold px-0"
                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30908.594922615324!2d-73.07331970206108!3d40.788157341303005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396%20Lillian%20Blvd%2C%20Holbrook%2C%20NY%2011741%2C%20USA!5e0!3m2!1sen!2s!4v1706086459668!5m2!1sen!2s"
                                data-glightbox="width: 100vw; height: 100vh;" data-gallery="map1">
                                <span class="animate-target">Show on map</span>
                                <i class="ci-chevron-right fs-lg ms-2" style="margin-top: 0.1875rem"></i>
                            </a>
                        </li>
                    </ul>
                    <hr />
                    <ul class="list-unstyled pb-sm-2 mb-0">
                        <li class="lh-lg pt-2">
                            California 32806, USA
                            <br />
                            514 S. Magnolia St., San Francisco
                        </li>
                        <li class="nav">
                            <a class="nav-link animate-underline fw-semibold px-0"
                                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.541405538252!2d-122.43545002315028!3d37.80078581065977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580da2de92663%3A0x343ead1106a153fa!2sMagnolia%20St%2C%20San%20Francisco%2C%20CA%2094123%2C%20USA!5e0!3m2!1sen!2s!4v1706785415174!5m2!1sen!2s"
                                data-glightbox="width: 100vw; height: 100vh;" data-gallery="map2">
                                <span class="animate-target">Show on map</span>
                                <i class="ci-chevron-right fs-lg ms-2" style="margin-top: 0.1875rem"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
