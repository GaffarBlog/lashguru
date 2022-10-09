 <!-- Footer -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- End of Scroll to Top Button -->
<!-- Footer of the application  -->

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>  &copy; <?php echo date('Y'); ?> Content Worker.</span>
        </div>
    </div>
    <!-- Footer files of the application  -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/content-worker-2js.js')}}"></script>
</footer>

@stack('js')
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
