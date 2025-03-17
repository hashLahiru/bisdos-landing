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
                        style="font-weight: 800; text-shadow: 5px 12px 5px rgba(0, 0, 0, 0.5)">
                        <span class="d-none d-lg-block" style="font-size: 90px">Connect</span>
                        <span class="d-none d-lg-block" style="font-size: 90px">Share</span>
                        <span class="d-none d-lg-block" style="font-size: 90px">Grow</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 80px">Connect</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 80px">Share</span>
                        <span class="d-none d-md-block d-lg-none" style="font-size: 80px">Grow</span>
                        <span class="d-md-none" style="font-size: 60px">Connect</span>
                        <span class="d-md-none" style="font-size: 60px">Share</span>
                        <span class="d-md-none" style="font-size: 60px">Grow</span>
                    </h1>
                </div>
                <div class="col-lg-6 d-flex justify-content-end pt-4">
                    <div class="vstack justify-content-end align-items-end gap-lg-3 gap-2">
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-send fs-5 me-2"></i>
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
                            <div class="fw-medium">Eco-friendly, paperless solution</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-brush fs-5 me-2"></i>
                            <div class="fw-medium">Customizable and professional design
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Foreground image --> --}}
        <img src="assets/img/home/single-product/hero/foreground2.png"
            class="position-absolute w-100 h-100 object-fit-cover z-2 d-none d-md-block start-0 top-0"
            alt="Foreground image">

        {{-- <!-- Background image --> --}}
        <img src="assets/img/home/single-product/hero/background2.jpg"
            class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Background image">
    </section>


    {{-- <!-- Features --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
        <div class="row justify-content-center pb-lg-5 mb-md-3 mb-lg-0 pb-4 pt-5">
            <div class="col-lg-6 text-center">
                <h2 class="display-4 mb-0">The Smart Way to Network.</h2>
                <p>Say goodbye to paper business cards and hello to a smarter, more efficient way to share your
                    professional identity. With BisDos Digital Business Cards, you can instantly share your contact
                    information by simply tapping on NFC-enabled phones or by using a QR code for non-NFC devices.</p>
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
                        <p class="mb-0">Effortlessly share your contact information with just a tap. Say goodbye to paper
                            cards and connect instantly.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <svg class="text-dark-emphasis mb-xl-2" xmlns="http://www.w3.org/2000/svg" width="48"
                            height="49" fill="currentColor">
                            <path
                                d="M23.78 16.14c-.361.005-.676.182-.865.486l-1.787 2.778a.78.78 0 0 1-1.077.234.78.78 0 0 1-.234-1.078l1.777-2.763a2.58 2.58 0 0 1 2.164-1.217c.889-.012 1.713.422 2.201 1.162l3.035 4.624.457-2.5a.78.78 0 0 1 .907-.627.78.78 0 0 1 .627.907l-.493 2.696c-.205 1.127-1.192 1.92-2.3 1.92-.139 0-.279-.012-.42-.038l-2.692-.522a.78.78 0 0 1-.617-.914.78.78 0 0 1 .914-.617l2.238.434-2.958-4.506a1.02 1.02 0 0 0-.877-.46zm-1.826 13.562h-5.359a1.02 1.02 0 0 1-.906-.526.98.98 0 0 1 .028-1.014l3.172-5.145.458 2.573a.78.78 0 0 0 .767.643c.045 0 .091-.004.138-.012a.78.78 0 0 0 .631-.904l-.509-2.86c-.226-1.269-1.441-2.117-2.709-1.893l-2.741.469a.78.78 0 0 0-.637.9.78.78 0 0 0 .9.637l2.401-.411-3.195 5.184c-.498.801-.522 1.77-.065 2.592a2.56 2.56 0 0 0 2.269 1.327h5.359a.78.78 0 0 0 .78-.78.78.78 0 0 0-.78-.78zm12.045-5.222c.016-.441-.32-.802-.75-.817-.196-.007-4.823-.146-7.527 2.558-1.033 1.032-1.553 2.153-1.545 3.332.005.787.245 1.43.454 1.877-.447.562-.871 1.16-1.27 1.795a.78.78 0 0 0 .246 1.075c.129.081.272.12.414.12a.78.78 0 0 0 .661-.365c1.436-2.287 3.135-3.988 5.194-5.199a.78.78 0 0 0 .276-1.067.78.78 0 0 0-1.067-.276c-1.185.698-2.281 1.562-3.279 2.586-.04-.173-.067-.358-.069-.554-.005-.756.351-1.482 1.088-2.219 1.634-1.633 4.292-2.002 5.596-2.082-.078 1.302-.443 3.955-2.084 5.595-.596.596-1.205.951-1.809 1.055a.78.78 0 0 0 .131 1.548.78.78 0 0 0 .133-.011c.928-.159 1.819-.66 2.648-1.489 2.561-2.561 2.572-6.846 2.56-7.459z">
                            </path>
                        </svg>
                        <h3 class="h6 mb-0">Customizable Designs</h3>
                        <p class="mb-0">Reflect your personal or business brand with customizable digital card designs
                            that stand out.</p>
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
                        <h3 class="h6 mb-0">Secure and Private</h3>
                        <p class="mb-0">Your information is safe with us. Share only what you want, keeping your data
                            secure and private.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <h3 class="h6 mb-0">Analytics and Insights</h3>
                        <p class="mb-0">Track views and interactions to understand how your card is performing and follow
                            up effectively.</p>
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
                    <img src="assets/img/home/single-product/feature_01.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4">Sustainable & Smart</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Say goodbye to paper waste and embrace seamless, eco-friendly
                            networking. With just a tap, you can share unlimited contact details effortlessly, eliminating
                            the need for traditional business cards. Make a smarter choice for the planet while simplifying
                            your connections.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Go Green with Zero Paper Waste</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Smart, Effortless Networking</div>
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
                    <img src="assets/img/home/single-product/feature_02.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
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
                        <h2 class="mb-lg-4 pt-lg-3">Your Personal Digital Hub</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Take networking to the next level with your own customizable
                            portfolio website and a built-in lead generation tool. Showcase your work, capture new
                            opportunities, and grow your professional presence—all in one powerful platform designed to help
                            you stand out.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Stand Out with a Personal Website</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Capture & Track New Leads</div>
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
                    <img src="assets/img/home/single-product/feature_03.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4">Built to Last, Rain or Shine</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Crafted for durability, these high-quality, water-resistant cards
                            are designed to withstand any environment. Whether in a busy office, an outdoor event, or on the
                            go, your card remains intact, ensuring long-term use without wear and tear.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Water & Scratch Resistant</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">Perfect for Any Setting</div>
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
                    <img src="assets/img/home/single-product/feature_04.png"
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4 pt-lg-3">Instant & Effortless Sharing</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Connect instantly with a single tap—no apps, no typing, no hassle.
                            Your details are shared seamlessly in seconds, making networking faster, smarter, and more
                            convenient than ever before.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor">
                                    <path
                                        d="M9.396 13.337l-.755-.757V8.34l3.607-2.14 2.325.622c.054.014.108.021.162.021.276 0 .529-.184.603-.464.089-.333-.109-.676-.442-.765l-1.146-.307.93-.552c.297-.176.395-.56.219-.856s-.56-.395-.856-.219l-.883.524.274-1.083c.085-.335-.118-.675-.453-.759s-.675.118-.759.452l-.579 2.29-3.002 1.782V3.423l1.72-1.697c.246-.242.248-.638.006-.884S9.729.594 9.483.836l-.842.831V.625C8.641.28 8.361 0 8.016 0s-.625.28-.625.625v1.042L6.549.836c-.246-.242-.641-.24-.884.006s-.24.641.006.884l1.72 1.697v3.466L4.389 5.116l-.612-2.337c-.088-.334-.429-.534-.763-.446s-.534.429-.446.763l.293 1.117-.902-.533c-.297-.176-.68-.077-.856.22s-.077.68.22.856l.915.541-1.125.284c-.335.084-.537.424-.453.759.072.283.326.472.606.472.051 0 .102-.006.153-.019L3.768 6.2 6.79 7.985 3.748 9.79l-2.321-.614c-.334-.088-.676.111-.764.444s.111.676.444.764l1.133.3-.889.527c-.297.176-.395.56-.219.856.117.197.325.306.538.306.108 0 .218-.028.318-.088l.871-.517-.292 1.1c-.089.334.11.676.444.764a.64.64 0 0 0 .161.021c.277 0 .529-.185.604-.465l.618-2.331L7.39 9.079v3.495l-1.72 1.697c-.246.242-.248.638-.006.884.122.124.284.186.445.186a.62.62 0 0 0 .439-.18l.842-.831v1.042c0 .345.28.625.625.625s.625-.28.625-.625V14.35l.807.81a.62.62 0 0 0 .443.184.62.62 0 0 0 .441-.182c.244-.244.245-.639.002-.884l-.937-.94zm5.177-4.159l-2.277.609-1.588-.938c-.297-.176-.68-.077-.856.22s-.077.68.22.856l1.56.922.622 2.374c.074.281.327.467.604.467a.62.62 0 0 0 .159-.021c.334-.088.534-.429.446-.763l-.303-1.154.911.538a.62.62 0 0 0 .317.087c.214 0 .422-.11.539-.307.176-.297.077-.68-.22-.856l-.905-.534 1.092-.292c.333-.089.531-.432.442-.765s-.432-.531-.765-.442z">
                                    </path>
                                </svg>
                                <div class="fs-sm fw-medium">Tap & Connect Instantly</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-sun me-2"></i>
                                <div class="fs-sm fw-medium">No Apps, No Extra Steps</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Color options --> --}}
    <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 container pb-5 pt-2">
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
    </section>


    {{-- <!-- Reviews --> --}}
    {{-- <section class="pt-sm-3 pt-md-4 pt-lg-5 my-xxl-3 pb-5 pt-2">
        <div class="position-relative py-sm-3 py-md-4 py-lg-5 py-2">
            <div class="position-relative z-2 my-xxl-3 container py-5">

                <div
                    class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-sm-4 pb-xl-0-3 mb-xl-5 mb-4 gap-2">
                    <h2 class="display-4 text-sm-start mb-0 text-center">They are happy with Bottle</h2>
                    <div class="nav justify-content-center justify-content-sm-start">
                        <a class="nav-link fs-base position-relative text-sm-start px-0 text-center" href="#!">
                            <span class="hover-effect-underline stretched-link">2000+ real reviews on our
                                Instagram</span>
                            <i class="ci-chevron-right fs-lg me-n1 ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 d-flex flex-column flex-md-row flex-lg-column gap-4">

                        <div class="card w-100 rounded-5 p-xl-2 overflow-hidden border-0 bg-transparent">
                            <div class="card-body position-relative z-1 pb-lg-2 pb-xl-3 pb-1">
                                <div class="d-flex text-warning mb-3 gap-1">
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                </div>
                                <h3 class="h5 mb-1 pb-2">Perfect for daily use!</h3>
                                <p class="mb-0">I bought the metallic blue bottle, and it has quickly become my
                                    go-to for everything! It keeps my water cold all day, even during my long shifts
                                    at work. Absolutely love it 🤩</p>
                            </div>
                            <div
                                class="card-footer position-relative z-1 d-flex align-items-center border-0 bg-transparent py-4">
                                <div class="ratio ratio-1x1 bg-body-secondary rounded-circle flex-shrink-0 overflow-hidden"
                                    style="width: 44px">
                                    <img src="assets/img/home/single-product/reviews/ava01.jpg" alt="Avatar">
                                </div>
                                <div class="fs-sm ms-1 ps-2">
                                    <div class="fw-semibold text-dark-emphasis">Jenny Wilson</div>
                                    <div>Freshness Bottle</div>
                                </div>
                            </div>
                            <span class="position-absolute w-100 h-100 d-none-dark start-0 top-0 bg-white"></span>
                            <span class="position-absolute w-100 h-100 d-none d-block-dark start-0 top-0 bg-white"
                                style="opacity: .08"></span>
                        </div>

                        <div class="card w-100 rounded-5 p-xl-2 overflow-hidden border-0 bg-transparent">
                            <div class="card-body position-relative z-1 pb-lg-2 pb-xl-3 pb-1">
                                <div class="d-flex text-warning mb-3 gap-1">
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                </div>
                                <h3 class="h5 mb-1 pb-2">Stays fresh and odor-free</h3>
                                <p class="mb-0">I love that this bottle doesn't retain any odors or flavors from
                                    previous drinks. I switch between coffee, juice, and water, and it always tastes
                                    fresh. The durability is also impressive. I've dropped it a few times, and it
                                    still looks brand new! ✨</p>
                            </div>
                            <div
                                class="card-footer position-relative z-1 d-flex align-items-center border-0 bg-transparent py-4">
                                <div class="ratio ratio-1x1 bg-body-secondary rounded-circle flex-shrink-0 overflow-hidden"
                                    style="width: 44px">
                                    <img src="assets/img/home/single-product/reviews/ava02.jpg" alt="Avatar">
                                </div>
                                <div class="fs-sm ms-1 ps-2">
                                    <div class="fw-semibold text-dark-emphasis">Jacob Jones</div>
                                    <div>Freshness Bottle</div>
                                </div>
                            </div>
                            <span class="position-absolute w-100 h-100 d-none-dark start-0 top-0 bg-white"></span>
                            <span class="position-absolute w-100 h-100 d-none d-block-dark start-0 top-0 bg-white"
                                style="opacity: .08"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column flex-md-row flex-lg-column gap-4">

                        <div class="card w-100 rounded-5 p-xl-2 overflow-hidden border-0 bg-transparent">
                            <div class="card-body position-relative z-1 pb-lg-2 pb-xl-3 pb-1">
                                <div class="d-flex text-warning mb-3 gap-1">
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                </div>
                                <h3 class="h5 mb-1 pb-2">Great for the gym</h3>
                                <p class="mb-0">I've taken this bottle to the gym every day for the past month,
                                    and it's still in perfect condition. The leak-proof design is a lifesaver, and
                                    the bright red color really stands out in my bag. Only wish it held a bit more
                                    water, but otherwise, it's fantastic!</p>
                            </div>
                            <div
                                class="card-footer position-relative z-1 d-flex align-items-center border-0 bg-transparent py-4">
                                <div class="ratio ratio-1x1 bg-body-secondary rounded-circle flex-shrink-0 overflow-hidden"
                                    style="width: 44px">
                                    <img src="assets/img/home/single-product/reviews/ava03.jpg" alt="Avatar">
                                </div>
                                <div class="fs-sm ms-1 ps-2">
                                    <div class="fw-semibold text-dark-emphasis">Robert Fox</div>
                                    <div>Heavenly Bottle</div>
                                </div>
                            </div>
                            <span class="position-absolute w-100 h-100 d-none-dark start-0 top-0 bg-white"></span>
                            <span class="position-absolute w-100 h-100 d-none d-block-dark start-0 top-0 bg-white"
                                style="opacity: .08"></span>
                        </div>

                        <div class="card w-100 rounded-5 p-xl-2 overflow-hidden border-0 bg-transparent">
                            <div class="card-body position-relative z-1 pb-lg-2 pb-xl-3 pb-1">
                                <div class="d-flex text-warning mb-3 gap-1">
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                </div>
                                <h3 class="h5 mb-1 pb-2">Perfect for travel</h3>
                                <p class="mb-0">I bought this bottle for a recent trip, and it was amazing 🔥.
                                    It kept my coffee hot during the entire flight and fit perfectly in my bag
                                    without leaking.</p>
                            </div>
                            <div
                                class="card-footer position-relative z-1 d-flex align-items-center border-0 bg-transparent py-4">
                                <div class="ratio ratio-1x1 bg-body-secondary rounded-circle flex-shrink-0 overflow-hidden"
                                    style="width: 44px">
                                    <img src="assets/img/home/single-product/reviews/ava04.jpg" alt="Avatar">
                                </div>
                                <div class="fs-sm ms-1 ps-2">
                                    <div class="fw-semibold text-dark-emphasis">Leslie Alexander</div>
                                    <div>Darkness Bottle</div>
                                </div>
                            </div>
                            <span class="position-absolute w-100 h-100 d-none-dark start-0 top-0 bg-white"></span>
                            <span class="position-absolute w-100 h-100 d-none d-block-dark start-0 top-0 bg-white"
                                style="opacity: .08"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column flex-md-row flex-lg-column gap-4">

                        <div class="card w-100 rounded-5 p-xl-2 overflow-hidden border-0 bg-transparent">
                            <div class="card-body position-relative z-1 pb-lg-2 pb-xl-3 pb-1">
                                <div class="d-flex text-warning mb-3 gap-1">
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                    <i class="ci-star-filled"></i>
                                </div>
                                <h3 class="h5 mb-1 pb-2">Stylish and functional</h3>
                                <p class="mb-0">I was looking for a bottle that was both stylish and durable,
                                    and this one exceeded my expectations ❤️. The rose gold finish is stunning, and
                                    it keeps my tea hot for hours.</p>
                            </div>
                            <div
                                class="card-footer position-relative z-1 d-flex align-items-center border-0 bg-transparent py-4">
                                <div class="ratio ratio-1x1 bg-body-secondary rounded-circle flex-shrink-0 overflow-hidden"
                                    style="width: 44px">
                                    <img src="assets/img/home/single-product/reviews/ava05.jpg" alt="Avatar">
                                </div>
                                <div class="fs-sm ms-1 ps-2">
                                    <div class="fw-semibold text-dark-emphasis">Bessie Cooper</div>
                                    <div>Sunflower Bottle</div>
                                </div>
                            </div>
                            <span class="position-absolute w-100 h-100 d-none-dark start-0 top-0 bg-white"></span>
                            <span class="position-absolute w-100 h-100 d-none d-block-dark start-0 top-0 bg-white"
                                style="opacity: .08"></span>
                        </div>

                        <div class="position-relative w-100 rounded-5 overflow-hidden">
                            <div class="d-lg-none" style="height: 300px"></div>
                            <div class="d-none d-lg-block" style="height: 364px"></div>
                            <div class="position-absolute w-100 h-100 z-3 start-0 top-0 p-4">
                                <a class="btn btn-lg btn-light stretched-link rounded-pill mt-xl-2 ms-xl-2"
                                    href="https://www.youtube.com/watch?v=ME5CirMkFZE" data-glightbox=""
                                    data-gallery="video2">
                                    <i class="ci-play fs-lg ms-n1 me-2"></i>
                                    Play
                                </a>
                            </div>
                            <div class="position-absolute d-flex align-items-end w-100 h-100 z-2 start-0 top-0 p-4">
                                <div class="mb-xl-2 ms-xl-2">
                                    <div class="d-flex text-warning mb-3 gap-1">
                                        <i class="ci-star-filled"></i>
                                        <i class="ci-star-filled"></i>
                                        <i class="ci-star-filled"></i>
                                        <i class="ci-star-filled"></i>
                                        <i class="ci-star-filled"></i>
                                    </div>
                                    <h3 class="h5 mb-0 text-white">Keeps drinks cold for hours</h3>
                                </div>
                            </div>
                            <span class="position-absolute w-100 h-100 z-1 start-0 top-0"
                                style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(0, 0, 0, 0.50) 100%)"></span>
                            <img src="assets/img/home/single-product/reviews/video.jpg"
                                class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="position-absolute w-100 h-100 d-none-dark start-0 top-0"
                style="background: linear-gradient(90deg, rgba(249,235,200,1) 0%, rgba(252,202,197,1) 100%); border-top-right-radius: 48px; border-top-left-radius: 48px">
            </div>
            <div class="position-absolute w-100 h-100 d-none d-block-dark start-0 top-0"
                style="background: linear-gradient(119deg, #333126 0%, #372e2f 52.24%); border-top-right-radius: 48px; border-top-left-radius: 48px">
            </div>
        </div>
    </section> --}}


    {{-- <!-- Social networks + CTA --> --}}
    {{-- <section class="pt-sm-3 pb-sm-2 pb-md-3 pt-md-4 py-lg-5 my-xxl-3 container pt-2">
        <div class="row g-3 g-sm-4 mb-sm-4 mb-md-0 mb-3">
            <div class="col-md-6 order-md-2 pt-md-5 mt-xl-2 mb-md-0 mb-3">
                <div class="mx-auto text-center" style="max-width: 500px">
                    <h2 class="display-4 pb-sm-2 pb-md-3 pb-lg-4 pb-1">Buy Bottle now and get <span
                            class="text-warning">25% off</span></h2>
                    <button type="button" class="btn btn-lg btn-warning rounded-pill">Buy Bottle Now</button>
                </div>
            </div>
            <div class="col-6 col-md-3 order-md-1">
                <a class="d-flex hover-effect-scale position-relative fs-3 bg-body-tertiary rounded-5 text-decoration-none mx-md-auto ms-auto overflow-hidden text-white"
                    href="#!" style="max-width: 196px">
                    <i class="ci-youtube position-absolute top-50 start-50 translate-middle z-2"></i>
                    <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="assets/img/home/single-product/socials/01.jpg" alt="Image">
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 order-md-3 pt-md-5 mt-lg-3 mt-xl-5">
                <a class="d-flex hover-effect-scale position-relative fs-3 bg-body-tertiary rounded-5 text-decoration-none mx-md-auto me-auto overflow-hidden text-white"
                    href="#!" style="max-width: 196px">
                    <i class="ci-facebook position-absolute top-50 start-50 translate-middle z-2"></i>
                    <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="assets/img/home/single-product/socials/02.jpg" alt="Image">
                    </div>
                </a>
            </div>
        </div>
        <div class="row g-3 g-sm-4 mt-md-n3 pb-5">
            <div class="col-6 col-md-3 offset-md-1 offset-lg-2">
                <a class="d-flex hover-effect-scale position-relative fs-3 bg-body-tertiary rounded-5 text-decoration-none mx-md-auto ms-auto overflow-hidden text-white"
                    href="#!" style="max-width: 196px">
                    <i class="ci-tiktok position-absolute top-50 start-50 translate-middle z-2"></i>
                    <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="assets/img/home/single-product/socials/03.jpg" alt="Image">
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 offset-md-2 offset-lg-1 pt-md-5 mt-lg-3 mt-xl-5">
                <a class="d-flex hover-effect-scale position-relative fs-3 bg-body-tertiary rounded-5 text-decoration-none mx-md-auto me-auto overflow-hidden text-white"
                    href="#!" style="max-width: 196px">
                    <i class="ci-instagram position-absolute top-50 start-50 translate-middle z-2"></i>
                    <div class="ratio ratio-1x1 hover-effect-target">
                        <img src="assets/img/home/single-product/socials/04.jpg" alt="Image">
                    </div>
                </a>
            </div>
        </div>
    </section> --}}
@endsection
