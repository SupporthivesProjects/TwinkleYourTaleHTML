
<?php include 'includes/header.php'; ?>

        <main class="header_space">
            <div class="row_wala_t">
                <div class="col-md-6 left_div_t">
                    <div style="width: 100%;">
                        <div class="mobile_nonet">
                            <div class="top_left_t">
                                <div class="left_top_leftt">
                                    <div class="left_top_leftt2">
                                        <div class="rest_donet">

                                        </div>
                                        <div class="rest_donet">
    
                                        </div>
                                        <div class="active_t">

                                        </div>
                                        <div class="rest_remainingt">

                                        </div>
                                       
                                    </div>

                                    <p> Step 3 of 4</p>
                                </div>
                                <div class="right_top_leftt">
                                    Save and exit
                                </div>
                            </div>
                        </div>

                        <div class="desktop_nonet">
                            <div class="top_left_t">
                                <div class="left_top_leftt">
                                    <div class="rest_donet">

                                    </div>
                                    <div class="rest_donet">

                                    </div>

                                    <div class="active_t">

                                    </div>
                                    <div class="rest_remainingt">

                                    </div>
                                  



                                </div>
                                <div class="left_top_leftt">
                                    <p> Step 3 of 4</p>
                                </div>

                                <div class="right_top_leftt">
                                    Save and exit
                                </div>
                            </div>
                        </div>
                        <div class="below_top_divt">
                            <h1>How should it look?</h1>
                            <h2>Pick a style and it appears on the left. Every page in the book is drawn in it.</h2>
                        </div>


                        <div class="middle_divt">
                            <div class="particualr_t">
                                <div class="with_title_svg">
                                    <h4 class="title_tt_svg">✦</h4>
                                    <h3 class="title_tt">Pick the art style</h3>
                                </div>
                                <div class="wrap_wala_div different_gap">
                                    <div class="art_divt3 active_t3">
                                        <div class="art_imgt3 story_t"></div>
                                        <h6>Storybook classic</h6>
                                    </div>
                                    
                                    <div class="art_divt3 ">
                                        <div class="art_imgt3 soft_t"></div>
                                        <h6>Soft watercolour</h6>
                                    </div>
                                    
                                    <div class="art_divt3">
                                        <div class="art_imgt3 paper_t"></div>
                                        <h6>Paper cut</h6>
                                    </div>
                                    
                                    <div class="art_divt3">
                                        <div class="art_imgt3 pastel_t"></div>
                                        <h6>Pastel dream</h6>
                                    </div>
                                    
                                    <div class="art_divt3">
                                        <div class="art_imgt3 ink_t"></div>
                                        <h6>Ink and gold</h6>
                                    </div>
                                    
                                    <div class="art_divt3">
                                        <div class="art_imgt3 night_t"></div>
                                        <h6>Night sky</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="particualr_t">
                                <div class="with_title_svg">
                                    <h4 class="title_tt_svg">✦</h4>
                                    <h3 class="title_tt">Anything else we should know about them?</h3>
                                </div>
                                <textarea class="input_t textarea_t" placeholder="Enter your message"></textarea>
                                <h5 class="words_wala_t">0 / 400 words</h5>
                            </div>
                           
                        </div>
                        <div class="button_walasection">
                            <button class="back_button_t">
                                Back
                            </button>
                            <button class="continue_button_t" >
                                Continue
                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.02791 5.47397L4.53991 1.20697L5.66191 -2.64645e-05L10.6089 4.62397L9.02791 5.47397ZM0.000906244 5.43997V3.79097H9.35091V5.43997H0.000906244ZM5.61091 9.17997L4.50591 7.97297L9.04491 3.72297L10.60891 4.62397L5.61091 9.17997Z" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 right_wala_image3">
                </div>
            </div>

        </main>

<?php include 'includes/footer.php'; ?>









<script>
    document.querySelectorAll('.personality-btn_t').forEach(function(button) {
        button.addEventListener('click', function() {
    
            if (this.classList.contains('active_tt')) {
                this.classList.remove('active_tt');
                return;
            }
    
            document.querySelectorAll('.personality-btn_t').forEach(function(btn) {
                btn.classList.remove('active_tt');
            });
    
            this.classList.add('active_tt');
        });
    });
    </script>
 <script>
    const textarea = document.querySelector('.textarea_t');
    const wordCounter = document.querySelector('.words_wala_t');
    const maxWords = 400;
    
    function countWords(text) {
        return text.trim().split(/\s+/).filter(Boolean).length;
    }
    
    textarea.addEventListener('beforeinput', function (e) {
        if (!e.data) return;
    
        const newValue =
            this.value.slice(0, this.selectionStart) +
            e.data +
            this.value.slice(this.selectionEnd);
    
        if (countWords(newValue) > maxWords) {
            e.preventDefault();
        }
    });
    
    textarea.addEventListener('paste', function (e) {
        const pastedText = e.clipboardData.getData('text');
    
        const newValue =
            this.value.slice(0, this.selectionStart) +
            pastedText +
            this.value.slice(this.selectionEnd);
    
        if (countWords(newValue) > maxWords) {
            e.preventDefault();
        }
    });
    
    textarea.addEventListener('input', function () {
        wordCounter.textContent = `${countWords(this.value)} / ${maxWords} words`;
    });
    
    wordCounter.textContent = `0 / ${maxWords} words`;
    </script>
    <script>
        document.querySelectorAll('.art_divt3').forEach(item => {
            item.addEventListener('click', function () {
                document.querySelectorAll('.art_divt3').forEach(card => {
                    card.classList.remove('active_t3');
                });
        
                this.classList.add('active_t3');
            });
        });
        </script>
