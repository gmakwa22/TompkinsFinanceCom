<!-- Modern Navigation Bar -->
<nav class="modern-navbar navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ $corplogo }}" alt="{{ $randomalt }}" class="navbar-logo">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleMobileMenu(this)">
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/why-choose-us') }}">What We Offer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/how-its-done') }}">How It's Done</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/education-center') }}">Be Informed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-link" href="{{ $corpsignin }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link apply-btn" href="{{ $corpregister }}">Apply Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu(button) {
    const navbar = button.closest('.navbar');
    const collapse = navbar.querySelector('.navbar-collapse');
    const isExpanded = button.getAttribute('aria-expanded') === 'true';

    // Toggle aria-expanded
    button.setAttribute('aria-expanded', !isExpanded);

    // Toggle the collapse class
    if (isExpanded) {
        collapse.classList.remove('show');
    } else {
        collapse.classList.add('show');
    }

    // Toggle hamburger animation
    button.classList.toggle('active');
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const navbar = document.querySelector('.modern-navbar');
    const toggler = navbar.querySelector('.navbar-toggler');
    const collapse = navbar.querySelector('.navbar-collapse');

    if (!navbar.contains(event.target) && collapse.classList.contains('show')) {
        toggler.setAttribute('aria-expanded', 'false');
        collapse.classList.remove('show');
        toggler.classList.remove('active');
    }
});

// Close mobile menu when clicking on a nav link
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('nav-link')) {
        const navbar = document.querySelector('.modern-navbar');
        const toggler = navbar.querySelector('.navbar-toggler');
        const collapse = navbar.querySelector('.navbar-collapse');

        toggler.setAttribute('aria-expanded', 'false');
        collapse.classList.remove('show');
        toggler.classList.remove('active');
    }
});
</script>

