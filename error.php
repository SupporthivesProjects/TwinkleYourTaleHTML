
<?php include 'includes/header.php'; ?>
<style>
    .logo-mo-div img {
        filter: invert(1);
    }
    .navbar {
       background: transparent;
    }
    .navbar .nav-link {
        color: var(--brand-cream, #F3EEE4);
    }
    .header-is-active .navbar{
        background: var(--brand-cream, #F3EEE4);
    }
    .scrolled .navbar{
        background: var(--brand-cream, #F3EEE4);
    }
    .scrolled .logo-mo-div img {
        filter: unset;
    }
    .scrolled .navbar {
       background: var(--brand-cream, #F3EEE4);
    }
    .scrolled .navbar .nav-link {
        color: var(--brand-ink, #0C1428);
    }
    @media only screen and (max-width: 600px) {
        .logo-mo-div img {
            filter: unset;
        }
    }
</style>
<section class="error-page-main">
    <video src="img/error-page-video.mp4" autoplay muted loop class="bg-image d-lg-block d-md-block d-none"></video>
    <video src="img/error-page-video-mo.mp4" autoplay muted loop class="bg-image d-lg-none d-md-none d-block"></video>
    <div class="container p-mo">
        <div class="col">
            <div class="error-content">
                <h6>404</h6>
                <h1>
                    A little lost.<br>
                    Still full of wonder.
                </h1>
                <p>
                    This page has wandered out of the story.
                    Let’s find your way back to the magic.
                </p>
                <div class="btn-wrap-btn">
                    <a href="#" class="btn btn-yellow">Back to the homepage 
                        <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.024 5.47397L4.536 1.20697L5.658 -2.64645e-05L10.605 4.62397L9.024 5.47397ZM-0.00300001 5.43997V3.79097H9.347V5.43997H-0.00300001ZM5.607 9.17997L4.502 7.97297L9.041 3.72297L10.605 4.62397L5.607 9.17997Z" fill="#0C1428"/>
                        </svg>
                    </a>
                    <a href="#" class="btn btn-yellow-border">Browse the stories</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>