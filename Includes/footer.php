<footer class="py-3 bg-info text-center" style="width: 100%; margin: 0; padding: 0; position: relative; clear: both; min-height: 50px;">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <ul class="nav justify-content-center mb-1" style="list-style: none; padding: 0; margin: 0; display: flex; gap: 15px;">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-body-secondary m-0">All rights reserved © 2025 by Sheikh Sarafat Hossain</p>
    </div>
</footer>


<!-- Fix for footer to stay at bottom even with short content -->
<!-- CHATGPT -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const footer = document.querySelector("footer");
        const body = document.body;
        if (body.offsetHeight < window.innerHeight) {
            footer.style.position = "absolute";
            footer.style.bottom = "0";
        } else {
            footer.style.position = "relative";
        }
    });
</script>
