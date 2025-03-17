@extends('layouts.app')

@section('content')
    <!-- FAQ (Accordion) -->
    <section class="mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5 container mb-1 py-5">
        <div class="row pt-xl-2">
            <div class="col-md-4 col-xl-3 mb-md-0 mb-4" style="margin-top: -120px">
                <div class="sticky-md-top text-md-start pe-md-4 pe-lg-5 pe-xl-0 text-center" style="padding-top: 120px">
                    <h2>Popular FAQs</h2>
                    <p class="pb-md-3 pb-2">
                        Still have unanswered questions and need to get in touch?
                    </p>
                    <a class="btn btn-lg btn-primary" href="/contact">Contact us</a>
                </div>
            </div>
            <div class="col-md-8 offset-xl-1">
                <!-- Accordion of questions -->
                <div class="accordion" id="faq">
                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-1">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="false"
                                aria-controls="faqCollapse-1">
                                <span class="me-2">What is a BisDos Digital Business Card, and how does it work?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-1" aria-labelledby="faqHeading-1"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                BisDos Digital Business Card is an NFC and QR technology-based business card that allows you
                                to share your contact details digitally. Unlike traditional printed business cards, you only
                                need one card for a lifetime, eliminating the need for stacks of paper cards.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-2">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="false"
                                aria-controls="faqCollapse-2">
                                <span class="me-2">What are the benefits of using a digital business card over a
                                    traditional paper card?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-2" aria-labelledby="faqHeading-2"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                A digital business card is a more professional and unique way to share your contact details.
                                It reduces recurring printing costs, is environmentally friendly, and allows for real-time
                                updates without reprinting.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-3">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="false"
                                aria-controls="faqCollapse-3">
                                <span class="me-2">Can I customize my digital business card with my brand colors and
                                    logo?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-3" aria-labelledby="faqHeading-3"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                Yes! You can provide your custom design, or our professional designers can create a design
                                for you to match your brand identity.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-4">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false"
                                aria-controls="faqCollapse-4">
                                <span class="me-2">How do team cards differ from personal digital cards?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-4" aria-labelledby="faqHeading-4"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Team Cards:</strong> You can replace card details and reassign them to new
                                        team members when employees leave, saving on reprinting costs. Additionally, you can
                                        manage and analyze leads for the entire team.</li>
                                    <li><strong>Personal Cards:</strong> You have full control over updating your own
                                        details anytime you want.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-5">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false"
                                aria-controls="faqCollapse-5">
                                <span class="me-2">Does the card support NFC and QR code scanning?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-5" aria-labelledby="faqHeading-5"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                Yes. BisDos Digital Business Cards come with both NFC and QR code functionality. If a
                                recipient’s phone does not support NFC, they can scan the QR code to receive your contact
                                details.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-6">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false"
                                aria-controls="faqCollapse-6">
                                <span class="me-2">How can I manage my team’s digital cards from a central
                                    dashboard?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-6" aria-labelledby="faqHeading-6"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                You can analyze team members' leads, gather all leads in one place, and update team member
                                details through the BisDos dashboard.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-7">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-7" aria-expanded="false"
                                aria-controls="faqCollapse-7">
                                <span class="me-2">Can I reassign a digital card to a new employee if someone leaves the
                                    company?</span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-7" aria-labelledby="faqHeading-7"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                Yes! You can update the existing card details and reassign it to a new team member without
                                needing a new card.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-8">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-8" aria-expanded="false"
                                aria-controls="faqCollapse-8">
                                <span class="me-2">
                                    Do I need an app to use the digital business card?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-8" aria-labelledby="faqHeading-8"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                No. BisDos cards work with built-in NFC and QR functionalities on smartphones. You can also
                                manage your profile and update your details through our web-based user dashboard without
                                downloading any apps.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-9">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-9" aria-expanded="false"
                                aria-controls="faqCollapse-9">
                                <span class="me-2">
                                    Is my contact information secure when using BisDos digital cards?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-9" aria-labelledby="faqHeading-9"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                Yes. Our servers use database encryption methods and bot protection to prevent unauthorized
                                access and keep your contact details secure.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-10">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-10" aria-expanded="false"
                                aria-controls="faqCollapse-10">
                                <span class="me-2">
                                    What are the pricing plans for personal and team digital cards?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-10" aria-labelledby="faqHeading-10"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                Personal card pricing is listed on our homepage. For team cards, pricing depends on the
                                number of employees. You can request a quotation by filling out the form on the Teams page.
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-11">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-11" aria-expanded="false"
                                aria-controls="faqCollapse-11">
                                <span class="me-2">
                                    What should I do if I lose my BisDos card?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-11" aria-labelledby="faqHeading-11"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                Inform us immediately, and we will disconnect your card to prevent unauthorized access to
                                your contact details.</div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-12">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-12" aria-expanded="false"
                                aria-controls="faqCollapse-12">
                                <span class="me-2">
                                    How much does it cost to replace a lost or damaged card?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-12" aria-labelledby="faqHeading-12"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                We offer a replacement card at 50% of the original price.</div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-13">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-13" aria-expanded="false"
                                aria-controls="faqCollapse-13">
                                <span class="me-2">
                                    What is the difference between one-time payment business cards and subscription-based
                                    cards?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-13" aria-labelledby="faqHeading-13"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>One-Time Payment Cards:</strong> Allow you to share and update your contact
                                        details, images without any additional features.</li>
                                    <li><strong>Subscription-Based Cards:</strong> YOffer advanced benefits such as lead
                                        management, personal portfolio websites, linking up to six social media profiles,
                                        and a personal gallery.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Question -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading-14">
                            <button type="button" class="accordion-button hover-effect-underline collapsed"
                                data-bs-toggle="collapse" data-bs-target="#faqCollapse-14" aria-expanded="false"
                                aria-controls="faqCollapse-14">
                                <span class="me-2">
                                    How much does delivery cost?
                                </span>
                            </button>
                        </h3>
                        <div class="accordion-collapse collapse" id="faqCollapse-14" aria-labelledby="faqHeading-14"
                            data-bs-parent="#faq">
                            <div class="accordion-body">
                                We offer free delivery for all BisDos digital business cards.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
