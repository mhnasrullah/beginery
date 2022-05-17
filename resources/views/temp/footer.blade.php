<footer id="contact" class="py-3 bg-white border-top-footer">
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center justify-content-center my-5">
                    <img src="/assets/reginnery_logo.png" alt="Beginnery Logo">
                    {{-- <div class="fs-5 text-purple mt-4">Jakarta, Indonesia</div>
                    <a href="/cdn-cgi/l/email-protection#b5d7d0d2dcdbdbd0c7cc9bd6daf5d2d8d4dcd99bd6dad8"
                        class="fs-5 text-purple"><span class="__cf_email__"
                            data-cfemail="fc9e999b959292998e85d29f93bc9b919d9590d29f9391">[email&#160;protected]</span></a> --}}
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center justify-content-center my-5">
                    <div class="text-footer fw-bolder fs-3 text-center">We Should Begin!</div>
                </div>
                <div
                    class="col-lg-4 col-md-12 col-12 d-flex align-items-center my-5 justify-content-center flex-column">
                    <div class="text-footer fw-bolder fs-5 text-center text-uppercase">Social Media</div>
                    <div class="row">
                        <div class="col-4">
                            <a target="_blank" href="https://www.instagram.com/beginnery.co/">
                                <img src="/assets/social-logo/instagram.svg" alt="instagram beginnery">
                            </a>
                        </div>
                        <div class=" col-4">
                            <a target="_blank" href="https://linktr.ee/Beginnery.co">
                                <img src="/assets/social-logo/linktree.svg" alt="linktree beginnery">
                            </a>
                        </div>
                        <div class="col-4">
                            <a target="_blank" href="https://www.linkedin.com/company/beginnery/">
                                <img src="/assets/social-logo/linkedin.svg" alt="linkedin beginnery">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-BXJKQ3WJH0"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-BXJKQ3WJH0');
</script>
<script src="/js/script.js"></script>
<script>
    let sections = document.getElementsByClassName("content-item");
    console.log(sections)

    function toggleAccordion() {


    }
    for (let i = 0; i < sections.length; i++) {
        sections[i].addEventListener("click", function () {
            for (let i = 0; i < sections.length; i++) {
                sections[i].classList.remove("active");
            }
            this.classList.add("active");
        });
    }
</script>
</body>

</html>