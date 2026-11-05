<footer class="site-footer position-relative overflow-hidden mt-4 text-center">
    <div class="container position-relative z-2 py-4">
        <p class="fw-bold fs-5 mb-3 text-start">Follow us</p>

        <ul class="footer-social list-unstyled d-flex justify-content-center flex-wrap mb-3">
            <li><a class="d-flex align-items-center justify-content-center text-white text-decoration-none" href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="0.8" fill="currentColor"/></svg></a></li>
            <li><a class="d-flex align-items-center justify-content-center text-white text-decoration-none" href="#" aria-label="X"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a></li>
            <li><a class="d-flex align-items-center justify-content-center text-white text-decoration-none" href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 8h3V4h-3a4 4 0 0 0-4 4v3H7v4h3v6h4v-6h3l1-4h-4V8z"/></svg></a></li>
            <li><a class="d-flex align-items-center justify-content-center text-white text-decoration-none" href="#" aria-label="Mail"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></a></li>
            <li><a class="d-flex align-items-center justify-content-center text-white text-decoration-none" href="#" aria-label="Discord"><svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 6c2-1 4-1.5 6-1.5S16 5 18 6c2 3 3 6.5 3 10-2 1.5-4 2-5 2l-1-2c-2 .5-4 .5-6 0l-1 2c-1 0-3-.5-5-2 0-3.5 1-7 3-10z"/><circle cx="9" cy="12" r="1.2" fill="currentColor"/><circle cx="15" cy="12" r="1.2" fill="currentColor"/></svg></a></li>
        </ul>

        <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>

    <img class="footer-art d-block w-100 h-auto pe-none user-select-none"
         src="<?php echo esc_url(get_template_directory_uri() . '/img/dobreuz.png'); ?>"
         alt="Footer Art">
</footer>

<?php wp_footer(); ?>
</body>
</html>