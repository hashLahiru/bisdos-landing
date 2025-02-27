@extends('layouts.app')

@section('content')
    {{-- <!-- Hero image section --> --}}
    <section class="position-relative bg-body-tertiary overflow-hidden"
        style="border-bottom-right-radius: 48px; border-bottom-left-radius: 48px; margin-top: -80px; padding-top: 80px">

        {{-- <!-- Content --> --}}
        <div class="position-relative z-1 pb-sm-5 container pb-4 pt-5">
            <div class="row py-md-4 py-lg-5 mt-xl-2 mb-xl-5">
                <div class="col-lg-6 pt-xxl-4">
                    <h1 class="d-flex flex-column text-uppercase fst-italic pb-lg-3 mb-lg-4 text-white"
                        style="font-weight: 800">
                        <span class="d-none d-lg-block" style="font-size: 60px">CONNECT... SHARE... GROW...</span>
                        <span class="d-none d-lg-block" style="font-size: 60px">AS A TEAM</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 30px">CONNECT... SHARE... GROW...</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 60px">AS A TEAM</span>
                        <span class="d-md-none" style="font-size: 30px">CONNECT... SHARE... GROW...</span>
                        <span class="d-md-none" style="font-size: 60px">AS A TEAM</span>
                    </h1>
                </div>
                <div class="col-lg-6 d-flex justify-content-end pt-4">
                    <div class="vstack justify-content-end align-items-end gap-lg-3 gap-2">
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-sun fs-5 me-2"></i>
                            <div class="fw-medium">Instantly share contact details</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            {{-- <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor">
                                <path
                                    d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                </path>
                            </svg> --}}
                            <i class="ci-leaf fs-5 me-2"></i>
                            <div class="fw-medium">Boost team branding with custom designs</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-leaf fs-5 me-2"></i>
                            <div class="fw-medium">Centralized management and lead collection
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Foreground image --> --}}
        <img src="assets/img/home/single-product/hero/foreground.png"
            class="position-absolute w-100 h-100 object-fit-cover z-2 d-none d-md-block start-0 top-0"
            alt="Foreground image">

        {{-- <!-- Background image --> --}}
        <img src="assets/img/home/single-product/hero/background.jpg"
            class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Background image">
    </section>


    {{-- <!-- Features --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row justify-content-center pb-lg-5 mb-md-3 mb-lg-0 pb-4 pt-5">
            <div class="col-lg-6 text-center">
                <h2 class="display-4 mb-0">The Smart Way for Teams to Network.</h2>
                <p>Strengthen your team’s professional presence with our advanced NFC and QR-powered business cards.
                    Designed for seamless external networking, our cards let your team share their contact details and
                    professional profiles with just a tap or a scan.</p>
            </div>
        </div>
        <div class="row align-items-center justify-content-center pb-lg-0 mb-lg-5 mb-4 pb-3">
            <div class="col-md-4 mb-md-0 mb-4">
                <div class="vstack gap-lg-5 gap-4">
                    <div class="vstack align-items-center gap-2 text-center">
                        <svg class="text-dark-emphasis mb-xl-2" xmlns="http://www.w3.org/2000/svg" width="48"
                            height="49" fill="currentColor">
                            <path
                                d="M25.745 31.172l-.944-.947v-5.3l4.509-2.675 2.907.778c.068.018.136.027.203.027a.78.78 0 0 0 .754-.579.78.78 0 0 0-.553-.957l-1.432-.383 1.163-.69a.781.781 0 1 0-.797-1.344l-1.104.655.343-1.354a.781.781 0 0 0-1.515-.383l-.724 2.862-3.753 2.227v-4.33l2.15-2.121a.781.781 0 1 0-1.097-1.112l-1.053 1.038v-1.303a.781.781 0 1 0-1.562 0v1.303l-1.053-1.039a.781.781 0 1 0-1.097 1.112l2.15 2.121v4.333l-3.752-2.217-.765-2.921a.781.781 0 0 0-1.512.396l.366 1.396-1.127-.666a.781.781 0 1 0-.795 1.345l1.144.676-1.407.355a.78.78 0 0 0-.566.949.78.78 0 0 0 .757.59.8.8 0 0 0 .192-.024l2.936-.741 3.777 2.231-3.803 2.257-2.901-.767a.781.781 0 1 0-.399 1.511l1.417.375-1.111.659a.78.78 0 0 0 .797 1.343l1.089-.646-.365 1.375a.78.78 0 1 0 1.511.401l.773-2.914 3.746-2.223v4.369l-2.15 2.121a.78.78 0 1 0 1.098 1.112l1.053-1.038v1.303a.781.781 0 1 0 1.563 0v-1.281l1.009 1.012a.78.78 0 1 0 1.107-1.103l-1.172-1.175zm6.471-5.2l-2.846.762-1.985-1.172a.781.781 0 1 0-.795 1.345l1.95 1.152.777 2.968a.78.78 0 1 0 1.512-.396l-.378-1.443 1.139.673a.78.78 0 0 0 .795-1.345l-1.131-.668 1.365-.366a.781.781 0 1 0-.404-1.509z">
                            </path>
                        </svg>
                        <h3 class="h6 mb-0">Instant Contact Sharing</h3>
                        <p class="mb-0">Effortlessly share unique contact profiles with just a tap. Each team member gets
                            their own profile under a unified design, enhancing brand consistency while maintaining
                            individual identity.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <svg class="text-dark-emphasis mb-xl-2" xmlns="http://www.w3.org/2000/svg" width="48"
                            height="49" fill="currentColor">
                            <path
                                d="M23.78 16.14c-.361.005-.676.182-.865.486l-1.787 2.778a.78.78 0 0 1-1.077.234.78.78 0 0 1-.234-1.078l1.777-2.763a2.58 2.58 0 0 1 2.164-1.217c.889-.012 1.713.422 2.201 1.162l3.035 4.624.457-2.5a.78.78 0 0 1 .907-.627.78.78 0 0 1 .627.907l-.493 2.696c-.205 1.127-1.192 1.92-2.3 1.92-.139 0-.279-.012-.42-.038l-2.692-.522a.78.78 0 0 1-.617-.914.78.78 0 0 1 .914-.617l2.238.434-2.958-4.506a1.02 1.02 0 0 0-.877-.46zm-1.826 13.562h-5.359a1.02 1.02 0 0 1-.906-.526.98.98 0 0 1 .028-1.014l3.172-5.145.458 2.573a.78.78 0 0 0 .767.643c.045 0 .091-.004.138-.012a.78.78 0 0 0 .631-.904l-.509-2.86c-.226-1.269-1.441-2.117-2.709-1.893l-2.741.469a.78.78 0 0 0-.637.9.78.78 0 0 0 .9.637l2.401-.411-3.195 5.184c-.498.801-.522 1.77-.065 2.592a2.56 2.56 0 0 0 2.269 1.327h5.359a.78.78 0 0 0 .78-.78.78.78 0 0 0-.78-.78zm12.045-5.222c.016-.441-.32-.802-.75-.817-.196-.007-4.823-.146-7.527 2.558-1.033 1.032-1.553 2.153-1.545 3.332.005.787.245 1.43.454 1.877-.447.562-.871 1.16-1.27 1.795a.78.78 0 0 0 .246 1.075c.129.081.272.12.414.12a.78.78 0 0 0 .661-.365c1.436-2.287 3.135-3.988 5.194-5.199a.78.78 0 0 0 .276-1.067.78.78 0 0 0-1.067-.276c-1.185.698-2.281 1.562-3.279 2.586-.04-.173-.067-.358-.069-.554-.005-.756.351-1.482 1.088-2.219 1.634-1.633 4.292-2.002 5.596-2.082-.078 1.302-.443 3.955-2.084 5.595-.596.596-1.205.951-1.809 1.055a.78.78 0 0 0 .131 1.548.78.78 0 0 0 .133-.011c.928-.159 1.819-.66 2.648-1.489 2.561-2.561 2.572-6.846 2.56-7.459z">
                            </path>
                        </svg>
                        <h3 class="h6 mb-0">Customizable Team Branding</h3>
                        <p class="mb-0">Reflect your brand’s identity with consistent, professional designs across all
                            team cards. Personalize names and designations while maintaining a cohesive brand image.</p>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-6 col-md-4 mb-md-0 mb-4">
                <div class="ratio" style="--cz-aspect-ratio: calc(465 / 416 * 100%)">
                    <img src="assets/img/home/single-product/01.png" alt="Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="vstack gap-lg-5 gap-4">
                    <div class="vstack align-items-center gap-2 text-center">
                        <svg class="text-dark-emphasis mb-xl-2" xmlns="http://www.w3.org/2000/svg" width="48"
                            height="49" fill="none" stroke="currentColor" stroke-width="1.868" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M15.781 15.89L33 33.109m-3.1-3.064c-1.147 1.84-3.186 3.064-5.51 3.064-3.586 0-6.494-2.915-6.494-6.511v-.199c0-1.467 1.198-3.613 2.566-5.584m1.888-2.517l2.041-2.408s6.494 7.095 6.494 10.509v.199l-.013.419">
                            </path>
                        </svg>
                        <h3 class="h6 mb-0">Lead Collection and Centralized Management</h3>
                        <p class="mb-0">Gather leads efficiently and manage them centrally. Track connections made by team
                            members, ensuring valuable contacts are never lost.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <svg class="text-dark-emphasis mb-xl-2" xmlns="http://www.w3.org/2000/svg" width="48"
                            height="49" fill="none" stroke="currentColor" stroke-width="1.868" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M15.781 15.89L33 33.109m-3.1-3.064c-1.147 1.84-3.186 3.064-5.51 3.064-3.586 0-6.494-2.915-6.494-6.511v-.199c0-1.467 1.198-3.613 2.566-5.584m1.888-2.517l2.041-2.408s6.494 7.095 6.494 10.509v.199l-.013.419">
                            </path>
                        </svg>
                        <h3 class="h6 mb-0">Seamless Networking</h3>
                        <p class="mb-0">Boost your team’s networking potential with instant contact sharing. Say goodbye
                            to paper business cards and outdated contact details.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-lg btn-dark rounded-pill">Get Your Digital Business Card</button>
        </div>
    </section>


    {{-- <!-- Features --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row mb-4">
            <div class="col-md-5 order-md-2 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/02.jpg"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4">Effortless Cost Efficiency</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Eliminate the need for constant reprints and share unlimited
                            contact details with ease. BisDos team cards allow you to seamlessly exchange information,
                            including company details, saving both time and money while reducing paper waste.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Eliminate Paper Waste</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Share Anytime, Anywhere</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-5 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/03.jpg"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                    <div
                        class="position-absolute w-100 h-100 d-flex align-items-end justify-content-end p-sm-4 start-0 top-0 p-3">
                        <a class="btn btn-lg btn-light stretched-link rounded-pill"
                            href="https://www.youtube.com/watch?v=ME5CirMkFZE" data-glightbox="" data-gallery="video1">
                            <i class="ci-play fs-lg ms-n1 me-2"></i>
                            Play
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        {{-- <div class="ratio ratio-1x1 mb-sm-4 mb-3" style="width: 92px">
                            <img src="assets/img/home/single-product/bpa-fee-light.png" class="d-none-dark"
                                alt="Image">
                            <img src="assets/img/home/single-product/bpa-fee-dark.png" class="d-none d-block-dark"
                                alt="Image">
                        </div> --}}
                        <h2 class="mb-lg-4 pt-lg-3">Easy to Reassign</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Say goodbye to wasted cards when employees leave—simply reset and
                            reassign! BisDos team cards allow you to transfer credentials effortlessly, ensuring smooth
                            transitions without the hassle of printing new cards for every new hire.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Swift Transfers in Seconds</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">No Need for New Printing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-5 order-md-2 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/02.jpg"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4">Centralized Management</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Effortlessly manage your entire team’s contact details from one
                            place. With a centralized admin dashboard, you can control all team cards, track leads, and
                            ensure seamless collaboration while keeping company information up to date.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Control & Monitor All Cards</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Organize & Track Leads</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-md-0 mb-4">
                <div class="position-relative h-100 bg-body-tertiary rounded-5 overflow-hidden">
                    <div class="d-none d-md-block" style="height: 440px"></div>
                    <div class="d-none d-sm-block d-md-none" style="height: 350px"></div>
                    <div class="d-sm-none" style="height: 250px"></div>
                    <img src="assets/img/home/single-product/03.jpg"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                    <div
                        class="position-absolute w-100 h-100 d-flex align-items-end justify-content-end p-sm-4 start-0 top-0 p-3">
                        <a class="btn btn-lg btn-light stretched-link rounded-pill"
                            href="https://www.youtube.com/watch?v=ME5CirMkFZE" data-glightbox="" data-gallery="video1">
                            <i class="ci-play fs-lg ms-n1 me-2"></i>
                            Play
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4 pt-lg-3">Tailored Design for Your Team</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Make a lasting impression with fully customized digital cards that
                            reflect your brand. From company colors to logos, BisDos team cards are designed to maintain a
                            professional and cohesive look across your entire organization.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Full Customization for Your Brand</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Consistent & Professional Appearance</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Color options --> --}}
    {{-- <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row align-items-end justify-content-center">
            <div class="col-md-5 mb-md-0 mb-4">
                <h2 class="display-4 pb-sm-2 pb-lg-3 pb-xl-4 pb-1">Express yourself with a rainbow of colors</h2>
                <div class="list-group list-group-borderless pb-sm-2 pb-lg-3 pb-xl-4 mb-3 gap-2 pb-1" role="tablist">
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4 active"
                        href="#freshness" data-bs-toggle="list" role="tab" aria-controls="freshness"
                        id="freshness-color" aria-selected="true" style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(106,168,162,1) 0%, rgba(237,237,213,1) 100%)"></span>
                        Classic White
                        <span class="fw-semibold ms-auto ps-3">3490.00</span>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4"
                        href="#sunflower" data-bs-toggle="list" role="tab" aria-controls="sunflower"
                        id="sunflower-color" aria-selected="false" tabindex="-1"
                        style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(195,72,82,1) 0%, rgba(250,227,152,1) 100%)"></span>
                        Onyx Black
                        <span class="fw-semibold ms-auto ps-3">3990.00</span>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4"
                        href="#heavenly " data-bs-toggle="list" role="tab" aria-controls="heavenly"
                        id="heavenly-color" aria-selected="false" tabindex="-1"
                        style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(56,125,154,1) 0%, rgba(237,244,243,1) 100%)"></span>
                        Sapphire Blue
                        <span class="fw-semibold ms-auto ps-3">4490.00</span>
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center fs-xl fw-normal px-sm-4"
                        href="#darkness" data-bs-toggle="list" role="tab" aria-controls="darkness"
                        id="darkness-color" aria-selected="false" tabindex="-1"
                        style="--cz-list-group-border-radius: 25px">
                        <span class="rounded-circle me-3 border border-2"
                            style="width: 24px; height: 24px; --cz-border-color: var(--cz-body-bg); background: linear-gradient(0deg, rgba(72,93,195,1) 0%, rgba(214,170,251,1) 100%)"></span>
                        Platinum Edition
                        <span class="fw-semibold ms-auto ps-3">6490.00</span>
                    </a>
                </div>
                <p class="fs-sm mb-sm-4">We are confident in the quality and performance of our cards, and we want you to
                    be completely satisfied. That’s why we offer a <span class="fw-semibold text-body-emphasis">30-day
                        money-back guarantee—no questions asked.</span></p>
                <button type="button" class="btn btn-lg btn-dark rounded-pill">Get Your Digital Card</button>
            </div>
            <div class="col-10 col-sm-8 col-md-7 col-xl-6 offset-xl-1">
                <div class="tab-content">
                    <div class="tab-pane show active" id="freshness" role="tabpanel" aria-labelledby="freshness-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/freshness.png" alt="Freshness">
                        </div>
                    </div>
                    <div class="tab-pane" id="sunflower" role="tabpanel" aria-labelledby="sunflower-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/sunflower.png" alt="Sunflower">
                        </div>
                    </div>
                    <div class="tab-pane" id="heavenly" role="tabpanel" aria-labelledby="heavenly-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/heavenly.png" alt="Heavenly">
                        </div>
                    </div>
                    <div class="tab-pane" id="darkness" role="tabpanel" aria-labelledby="darkness-color">
                        <div class="ratio" style="--cz-aspect-ratio: calc(562 / 636 * 100%)">
                            <img src="assets/img/home/single-product/colors/darkness.png" alt="Darkness">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="bg-body-tertiary pb-sm-3 pb-md-4 pb-lg-5 mb-5">
        <div class="mb-xxl-3 container py-5">
            <!-- Page title -->
            <h1 class="pb-sm-3 mt-lg-3 mt-xl-4 pb-2 text-center">
                Get in Touch with Our Team Experts
            </h1>

            <!-- Forms wrapper -->
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-9 col-xl-8">
                    <div class="tab-content bg-body rounded-5 py-sm-4 px-sm-5 px-4 py-3">
                        <p class="mx-auto py-3 text-center" style="max-width: 450px">
                            Have questions or need a customized solution for your team? Fill out the form below, and our
                            specialists will get back to you within 24 hours. You can also reach us directly at
                            <a class="text-decoration-none" href="mailto:info@cartzilla.com">
                                [your email here].
                            </a>
                        </p>

                        <!-- Customers form -->
                        <div class="tab-pane fade show active" id="customers" role="tabpanel"
                            aria-labelledby="customers-tab">
                            <form class="needs-validation" novalidate="">
                                <div class="row g-4">
                                    <div class="col-md-12 position-relative">
                                        <label for="fn" class="form-label">Your name *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="fn" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your first name!
                                        </div>
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="ln" class="form-label">Email *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="ln" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your last name!
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <input type="tel" class="form-control form-control-lg rounded-pill"
                                            id="phone"
                                            data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                            placeholder="+1 ___ ___ __" />
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="email" class="form-label">Company Name *</label>
                                        <input type="email" class="form-control form-control-lg rounded-pill"
                                            id="email" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your email address!
                                        </div>
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="email" class="form-label">Team Members Count *</label>
                                        <input type="email" class="form-control form-control-lg rounded-pill"
                                            id="email" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your email address!
                                        </div>
                                    </div>

                                    <div class="col-12 position-relative">
                                        <label for="message" class="form-label">Message </label>
                                        <textarea class="form-control form-control-lg rounded-6" id="message" rows="5" required=""></textarea>
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

                        <!-- Retailers form -->
                        <div class="tab-pane fade" id="retailers" role="tabpanel" aria-labelledby="retailers-tab">
                            <form class="needs-validation" novalidate="">
                                <div class="row g-4">
                                    <div class="col-md-6 position-relative">
                                        <label for="company" class="form-label">Company name *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="company" required="" />
                                        <div class="invalid-tooltip bg-transparent py-0 ps-3">
                                            Enter your company name!
                                        </div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="person" class="form-label">Contact person *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="person" required="" />
                                        <div class="invalid-tooltip bg-transparent py-0 ps-3">
                                            Enter contact person name!
                                        </div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="email-r" class="form-label">Email *</label>
                                        <input type="email" class="form-control form-control-lg rounded-pill"
                                            id="email-r" required="" />
                                        <div class="invalid-tooltip bg-transparent py-0 ps-3">
                                            Enter company email address!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone-r" class="form-label">Phone number</label>
                                        <input type="tel" class="form-control form-control-lg rounded-pill"
                                            id="phone-r"
                                            data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                            placeholder="+1 ___ ___ __" />
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="website" class="form-label">Website</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="website" />
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label class="form-label">Subject *</label>
                                        <select class="form-select form-select-lg rounded-pill"
                                            data-select='{
                          "classNames": {
                            "containerInner": ["form-select", "form-select-lg", "rounded-pill"]
                          }
                        }'
                                            required="">
                                            <option value="">Select subject</option>
                                            <option value="General inquiry">General inquiry</option>
                                            <option value="Product information">Product information</option>
                                            <option value="Technical support">Technical support</option>
                                            <option value="Account assistance">Affiliation program</option>
                                            <option value="Security concerns">Marketing and promotions</option>
                                            <option value="Security concerns">
                                                Press and media inquiries
                                            </option>
                                        </select>
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Select the subject of your message!
                                        </div>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <label for="message-r" class="form-label">Message *</label>
                                        <textarea class="form-control form-control-lg rounded-6" id="message-r" rows="5" required=""></textarea>
                                        <div class="invalid-tooltip bg-transparent py-0 ps-3">
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
@endsection
