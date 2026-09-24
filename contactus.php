<?php include 'includes/header.php'; ?>
<section class="contact-us">
    <div class="container px-0">
        <div class="contact-us__design">

            <div class="contact-us__content">

                <div class="contact-us__eyebrow">
                    <span>✦</span> Contact
                </div>

                <h1 class="contact-us__title">
                    Get in touch.
                </h1>

                <p class="contact-us__description">
                    Questions about a book, a purchase or your account.
                    We read everything that comes in.
                </p>

            </div>

        </div>
    </div>
</section>

<section class="help-section d-lg-block d-md-block d-none  ">
    <div class="container px-0">
        <div class="help-section__cards">

            <!-- Card 1 -->
            <a href="#" class="help-card">
                <div class="help-card__icon">
                    <img src="./img/open_book.png" alt="Your storybook">
                </div>

                <div class="help-card__content">
                    <span class="help-card__eyebrow">
                        01 / HOW CAN WE HELP?
                    </span>

                    <h2 class="help-card__title">
                        Your storybook
                    </h2>

                    <p class="help-card__description">
                        Creating, reading or downloading a book.
                    </p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="help-card">
                <div class="help-card__icon">
                    <img src="./img/book.png" alt="Your account">
                </div>

                <div class="help-card__content">
                    <span class="help-card__eyebrow">
                        02 / HOW CAN WE HELP?
                    </span>

                    <h2 class="help-card__title">
                        Your account
                    </h2>

                    <p class="help-card__description">
                        Purchases, profile or access to your library.
                    </p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="help-card">
                <div class="help-card__icon">
                    <img src="./img/quill.png" alt="Something else">
                </div>

                <div class="help-card__content">
                    <span class="help-card__eyebrow">
                        03 / HOW CAN WE HELP?
                    </span>

                    <h2 class="help-card__title">
                        Something else
                    </h2>

                    <p class="help-card__description">
                        An idea to share or a question of your own.
                    </p>
                </div>
            </a>

        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container px-0">
        <div class="contact-section__layout">

            <!-- LEFT: CONTACT FORM -->
            <div class="contact-form-wrapper">

                <form class="contact-form">

                    <!-- Name -->
                    <div class="contact-form__field">
                        <label for="name" class="contact-form__label">
                            Your name
                        </label>

                        <input type="text" id="name" name="name" class="contact-form__input" placeholder="Alex Morgan">
                    </div>

                    <!-- Email -->
                    <div class="contact-form__field">
                        <label for="email" class="contact-form__label">
                            Email
                        </label>

                        <input type="email" id="email" name="email" class="contact-form__input"
                            placeholder="alex.morgan@example.com">
                    </div>

                    <!-- Subject -->
                    <div class="contact-form__field">
                        <label for="subject" class="contact-form__label">
                            What is it about
                        </label>

                        <select id="subject" name="subject" class="contact-form__input contact-form__select">
                            <option value="book">
                                A book I have made
                            </option>

                            <option value="account">
                                My account
                            </option>

                            <option value="other">
                                Something else
                            </option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div class="contact-form__field">
                        <label for="message" class="contact-form__label">
                            Message
                        </label>

                        <textarea id="message" name="message" class="contact-form__input contact-form__textarea"
                            placeholder="Tell us what is going on."></textarea>
                    </div>

                    <!-- Terms -->
                    <div class="contact-form__terms">
                        <input type="checkbox" id="terms" name="terms" class="contact-form__checkbox">

                        <label for="terms" class="contact-form__terms-label">
                            I agree to the Terms &amp; Conditions and the Privacy Policy.
                        </label>
                    </div>

                    <!-- Recaptcha -->
                    <div class="contact-form__captcha">
                        <!-- Google reCAPTCHA goes here -->
                    </div>

                    <!-- Submit -->
                    <button type="button" class="contact-form__button"  type="button"
    data-bs-toggle="modal"
    data-bs-target="#contactSuccessModal">
                        <span>Send message</span>

                        <svg class="contact-form__button-icon" width="11" height="10" viewBox="0 0 11 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.02791 5.47397L4.53991 1.20697L5.66191 -2.64645e-05L10.6089 4.62397L9.02791 5.47397ZM0.000906244 5.43997V3.79097H9.35091V5.43997ZM5.61091 9.17997L4.50591 7.97297L9.04491 3.72297L10.6089 4.62397L5.61091 9.17997Z"
                                fill="currentColor" />
                        </svg>
                    </button>

                </form>

            </div>


            <!-- RIGHT: HELP PANEL -->
            <aside class="contact-help">

                <h2 class="contact-help__title">
                    A helpful first page.
                </h2>

                <div class="contact-help__content">

                    <p class="contact-help__description">
                        Our FAQs cover creating stories, tokens and downloads.
                    </p>

                    <button type="button" class="contact-help__button">
                        <span>Explore the FAQs</span>
                        <svg class="contact-help__button-icon" width="11" height="10" viewBox="0 0 11 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.02791 5.47397L4.53991 1.20697L5.66191 -2.64645e-05L10.6089 4.62397L9.02791 5.47397ZM0.000906244 5.43997V3.79097H9.35091V5.43997ZM5.61091 9.17997L4.50591 7.97297L9.04491 3.72297L10.6089 4.62397L5.61091 9.17997Z"
                                fill="currentColor" />
                        </svg>
                    </button>

                    <div class="contact-help__item">
                        <span class="contact-help__eyebrow">
                            PREFER EMAIL?
                        </span>

                        <a href="mailto:hello@twinkleyourtale.com" class="contact-help__email">
                            hello@twinkleyourtale.com
                        </a>
                    </div>

                    <div class="contact-help__item">
                        <span class="contact-help__eyebrow">
                            ACCOUNT QUESTIONS?
                        </span>

                        <p class="contact-help__text">
                            Log in before sending your message so we can
                            help with your library.
                        </p>
                    </div>

                </div>

            </aside>

        </div>
    </div>
</section>

<section class="help-section d-lg-none d-md-none d-block  ">
    <div class="container px-0">
        <div class="help-section__cards">

            <!-- Card 1 -->
            <a href="#" class="help-card">
                <div class="help-card__icon">
                    <img src="./img/open_book.png" alt="Your storybook">
                </div>

                <div class="help-card__content">
                    <span class="help-card__eyebrow">
                        01 / HOW CAN WE HELP?
                    </span>

                    <h2 class="help-card__title">
                        Your storybook
                    </h2>

                    <p class="help-card__description">
                        Creating, reading or downloading a book.
                    </p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="help-card">
                <div class="help-card__icon">
                    <img src="./img/book.png" alt="Your account">
                </div>

                <div class="help-card__content">
                    <span class="help-card__eyebrow">
                        02 / HOW CAN WE HELP?
                    </span>

                    <h2 class="help-card__title">
                        Your account
                    </h2>

                    <p class="help-card__description">
                        Purchases, profile or access to your library.
                    </p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="help-card">
                <div class="help-card__icon">
                    <img src="./img/quill.png" alt="Something else">
                </div>

                <div class="help-card__content">
                    <span class="help-card__eyebrow">
                        03 / HOW CAN WE HELP?
                    </span>

                    <h2 class="help-card__title">
                        Something else
                    </h2>

                    <p class="help-card__description">
                        An idea to share or a question of your own.
                    </p>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- SUCCESS MODAL -->
<div
    class="modal fade contact-success-modal"
    id="contactSuccessModal"
    tabindex="-1"
    aria-labelledby="contactSuccessModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered contact-success-modal__dialog">

        <div class="modal-content contact-success-modal__content">

            <!-- Success Icon -->
            <div class="contact-success-modal__icon">
                <span>✓</span>
            </div>

            <!-- Title -->
            <h2
                class="contact-success-modal__title"
                id="contactSuccessModalLabel"
            >
                That is with us.
            </h2>

            <!-- Description -->
            <p class="contact-success-modal__description">
                We have your message and a copy is on its way to
                alex.morgan@example.com.
            </p>

            <!-- Button -->
            <button
                type="button"
                class="contact-success-modal__button"
                data-bs-dismiss="modal"
            >
                <span>Back to the site</span>

                <svg
                    width="11"
                    height="10"
                    viewBox="0 0 11 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        d="M9.02791 5.47397L4.53991 1.20697L5.66191 -2.64645e-05L10.6089 4.62397L9.02791 5.47397ZM0.000906244 5.43997V3.79097H9.35091V5.43997ZM5.61091 9.17997L4.50591 7.97297L9.04491 3.72297L10.6089 4.62397L5.61091 9.17997Z"
                        fill="currentColor"
                    />
                </svg>
            </button>

        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>