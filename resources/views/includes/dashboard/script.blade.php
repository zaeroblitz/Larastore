<script src="/template/assets/js/core/popper.min.js"></script>
<script src="/template/assets/js/core/bootstrap.min.js"></script>
<script src="/template/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/template/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/template/assets/js/plugins/chartjs.min.js"></script>
<script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
            damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
</script>
<script src="/template/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
