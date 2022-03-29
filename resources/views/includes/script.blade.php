<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.slim.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    $(".carousel").carousel({
        interval: 5000,
    });

    const getDate = new Date();
    const getFullYear = getDate.getFullYear();

    const currentYear = document.getElementById("currentYear");
    currentYear.textContent = getFullYear;

</script>
<script src="/scripts/navbar-scroll.js"></script>
