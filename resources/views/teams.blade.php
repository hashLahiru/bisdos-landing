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
                            <i class="ci-send fs-5 me-2"></i>
                            <div class="fw-medium">Instantly share contact details</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-rocket fs-5 me-2"></i>
                            <div class="fw-medium">Boost team branding with custom designs</div>
                        </div>
                        <div class="d-flex align-items-center rounded-pill px-sm-4 mb-1 border border-white border-opacity-25 bg-white bg-opacity-25 px-3 text-white"
                            style="padding: 14px 0; box-shadow: 0 12px 12px -4px rgba(0,0,0, .05); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px)">
                            <i class="ci-user-check fs-5 me-2"></i>
                            <div class="fw-medium">Centralized management and lead collection
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Foreground image --> --}}
        <img src="assets/img/teamcard/backgroundTeam.png"
            class="position-absolute w-100 h-100 object-fit-cover z-2 d-none d-md-block start-0 top-0"
            alt="Foreground image">

        {{-- <!-- Background image --> --}}
        <img src="assets/img/teamcard/backgroundTeam2.jpg"
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
                        <i class="ci-rss fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Instant Contact Sharing</h3>
                        <p class="mb-0">Effortlessly share unique contact profiles with just a tap. Each team member gets
                            their own profile under a unified design, enhancing brand consistency while maintaining
                            individual identity.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-settings fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Customizable Team Branding</h3>
                        <p class="mb-0">Reflect your brand’s identity with consistent, professional designs across all
                            team cards. Personalize names and designations while maintaining a cohesive brand image.</p>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-6 col-md-4 mb-md-0 mb-4">
                <div class="ratio" style="--cz-aspect-ratio: calc(465 / 416 * 100%)">
                    <img src="assets/img/teamcard/TeamCardSample.png" alt="Image">
                </div>
            </div>
            <div class="col-md-4">
                <div class="vstack gap-lg-5 gap-4">
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-user-check fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
                        <h3 class="h6 mb-0">Lead Collection and Centralized Management</h3>
                        <p class="mb-0">Gather leads efficiently and manage them centrally. Track connections made by team
                            members, ensuring valuable contacts are never lost.</p>
                    </div>
                    <div class="vstack align-items-center gap-2 text-center">
                        <i class="ci-link fs-5 mb-3 me-2" style="color: white; font-size: 1.5rem !important;"> </i>
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
                    <img src={{ asset('/assets/img/team-features/01.png') }}
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
                                <i class="ci-layers me-2"></i>
                                <div class="fs-sm fw-medium">Eliminate Paper Waste</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-send me-2"></i>
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
                    <img src={{ asset('/assets/img/team-features/02.png') }}
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="d-flex align-items-center h-100 bg-body-tertiary rounded-5 p-xl-5 p-4">
                    <div class="p-sm-3 p-xxl-2">
                        <h2 class="mb-lg-4 pt-lg-3">Easy to Reassign</h2>
                        <p class="fs-lg pb-sm-2 pb-lg-3">Say goodbye to wasted cards when employees leave—simply reset and
                            reassign! BisDos team cards allow you to transfer credentials effortlessly, ensuring smooth
                            transitions without the hassle of printing new cards for every new hire.</p>
                        <div class="d-flex flex-column flex-sm-row gap-lg-3 gap-2">
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-clock me-2"></i>
                                <div class="fs-sm fw-medium">Swift Transfers in Seconds</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-printer me-2"></i>
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
                    <img src={{ asset('/assets/img/team-features/03.png') }}
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
                                <i class="ci-auto me-2"></i>
                                <div class="fs-sm fw-medium">Control & Monitor All Cards</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-activity me-2"></i>
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
                    <img src={{ asset('/assets/img/team-features/04.png') }}
                        class="position-absolute w-100 h-100 object-fit-cover start-0 top-0" alt="Image">
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
                                <i class="ci-settings me-2"></i>
                                <div class="fs-sm fw-medium">Full Customization for Your Brand</div>
                            </div>
                            <div class="d-flex align-items-center text-body-emphasis bg-body rounded-pill px-3 shadow"
                                style="padding: 10px 0">
                                <i class="ci-user-check me-2"></i>
                                <div class="fs-sm fw-medium">Consistent & Professional Appearance</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            team will get back to you within 24 hours. You can also reach us directly at
                            <a class="text-decoration-none" href="mailto:info@bisdos.com">
                                info@bisdos.com
                            </a>
                        </p>

                        <!-- Customers form -->
                        <div class="tab-pane fade show active" id="customers" role="tabpanel"
                            aria-labelledby="customers-tab">
                            <form class="needs-validation" novalidate="" action="{{ route('teamcard.submit') }}"
                                method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-md-12 position-relative">
                                        <label for="name" class="form-label">Your name *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="name" name="name" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your name!
                                        </div>
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control form-control-lg rounded-pill"
                                            id="email" name="email" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your email!
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone" class="form-label">Phone number</label>
                                        <input type="tel" class="form-control form-control-lg rounded-pill"
                                            id="phone" name="phone"
                                            data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                            placeholder="+94 __ ___ ____" />
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="company" class="form-label">Company Name *</label>
                                        <input type="text" class="form-control form-control-lg rounded-pill"
                                            id="company" name="company" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your company name!
                                        </div>
                                    </div>
                                    <div class="col-md-12 position-relative">
                                        <label for="member_count" class="form-label">Team Members Count *</label>
                                        <input type="email" class="form-control form-control-lg rounded-pill"
                                            id="member_count" name="member_count" required="" />
                                        <div class="invalid-tooltip z-0 bg-transparent py-0 ps-3">
                                            Enter your team members count!
                                        </div>
                                    </div>

                                    <div class="col-12 position-relative">
                                        <label for="message" class="form-label">Message </label>
                                        <textarea id="message" name="message" class="form-control form-control-lg rounded-6" id="message"
                                            rows="5" required=""></textarea>
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
