<div class="footer">
 
  <p id="footercontent">Team 34 2026</p>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const darkBtn = document.getElementById("darkBtn");
  const textBtn = document.getElementById("textBtn");
  const contrastBtn = document.getElementById("contrastBtn");

  function saveModes() {
    localStorage.setItem("a11y-dark", document.body.classList.contains("a11y-dark"));
    localStorage.setItem("a11y-large-text", document.body.classList.contains("a11y-large-text"));
    localStorage.setItem("a11y-contrast", document.body.classList.contains("a11y-contrast"));
  }

  if (localStorage.getItem("a11y-dark") === "true") {
    document.body.classList.add("a11y-dark");
  }

  if (localStorage.getItem("a11y-large-text") === "true") {
    document.body.classList.add("a11y-large-text");
  }

  if (localStorage.getItem("a11y-contrast") === "true") {
    document.body.classList.add("a11y-contrast");
  }

  if (darkBtn) {
    darkBtn.addEventListener("click", function () {
      document.body.classList.remove("a11y-contrast");
      document.body.classList.toggle("a11y-dark");
      saveModes();
    });
  }

  if (textBtn) {
    textBtn.addEventListener("click", function () {
      document.body.classList.toggle("a11y-large-text");
      saveModes();
    });
  }

  if (contrastBtn) {
    contrastBtn.addEventListener("click", function () {
      document.body.classList.remove("a11y-dark");
      document.body.classList.toggle("a11y-contrast");
      saveModes();
    });
  }
});

function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: 'en'
    },
    'google_translate_element'
  );
}
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
