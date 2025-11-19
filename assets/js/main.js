// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // COUNTDOWN TIMER
  const timerDisplay = document.querySelector("#timer");
  // 4 hours = 14400 seconds
  let timeInSeconds = 4 * 60 * 60;

  function startTimer() {
    if (!timerDisplay) return;

    setInterval(function () {
      let hours = parseInt(timeInSeconds / 3600, 10);
      let minutes = parseInt((timeInSeconds % 3600) / 60, 10);
      let seconds = parseInt(timeInSeconds % 60, 10);

      hours = hours < 10 ? "0" + hours : hours;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      timerDisplay.textContent = `${hours}:${minutes}:${seconds}`;

      if (--timeInSeconds < 0) {
        timeInSeconds = 4 * 60 * 60; // restart
      }
    }, 1000);
  }
  startTimer();

  // FAKE NOTIFICATIONS (Social Proof)
  const names = [
    "Oleksandr, Lviv",
    "Maria, Kyiv",
    "Andrii, Odesa",
    "Olha, Kharkiv",
    "Maksym, Dnipro",
    "Vitalii, Lutsk",
  ];
  const notification = document.getElementById("fake-notification");

  if (notification) {
    const notifName = notification.querySelector(".notif-name");

    function showNotification() {
      if (!notifName) return;

      const randomName = names[Math.floor(Math.random() * names.length)];
      notifName.innerText = randomName;
      notification.classList.add("show");

      setTimeout(() => {
        notification.classList.remove("show");
      }, 4000);
    }

    // First notification after 5s, then every 15s
    setTimeout(showNotification, 5000);
    setInterval(showNotification, 15000);
  }

  // UTM + ALL URL PARAMETERS
  const params = new URLSearchParams(window.location.search);
  if (params.toString()) {
    params.forEach((value, key) => {
      const input = document.querySelector(`input[name="${key}"]`);
      if (input) {
        input.value = value;
      }
    });
  }

  // FORM VALIDATION + DUPLICATE REQUEST PROTECTION
  const form = document.querySelector(".main-form");
  if (form) {
    const form = document.querySelector(".main-form");
    const submitBtn = form.querySelector(".btn-submit");
    const nameInput = form.querySelector('input[name="name"]');
    const phoneInput = form.querySelector('input[name="phone"]');
    const emailInput = form.querySelector('input[name="email"]');

    function clearErrors() {
      form
        .querySelectorAll(".input-error")
        .forEach((el) => el.classList.remove("input-error"));
      form.querySelectorAll(".error-message").forEach((el) => el.remove());
    }

    function showError(input, message) {
      if (!input) return;
      input.classList.add("input-error");
      const msg = document.createElement("div");
      msg.className = "error-message";
      msg.textContent = message;
      input.parentElement.insertAdjacentElement("afterend", msg);
    }

    // Ukrainian phone validation: +380XXXXXXXXX or 0XXXXXXXXX
    function isValidUaPhone(phone) {
      const cleaned = phone.replace(/[^\d+]/g, "");
      const intlPattern = /^\+?380\d{9}$/; // +380XXXXXXXXX
      const localPattern = /^0\d{9}$/; // 0XXXXXXXXX
      return intlPattern.test(cleaned) || localPattern.test(cleaned);
    }

    // If a request was already submitted — block the form
    if (localStorage.getItem("order_submitted") === "true") {
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = "Request already submitted";
      }
    }

    form.addEventListener("submit", function (e) {
      if (!submitBtn) return;

      clearErrors();

      let hasError = false;

      // Name: required
      const nameVal = nameInput ? nameInput.value.trim() : "";
      if (!nameVal || nameVal.length < 2) {
        hasError = true;
        showError(nameInput, "Please enter your name (at least 2 characters).");
      }

      // Phone: required, UA only
      const phoneVal = phoneInput ? phoneInput.value.trim() : "";
      if (!phoneVal) {
        hasError = true;
        showError(phoneInput, "Please enter your phone number.");
      } else if (!isValidUaPhone(phoneVal)) {
        hasError = true;
        showError(
          phoneInput,
          "Please enter a valid Ukrainian phone number (e.g. +380XXXXXXXXX or 0XXXXXXXXX)."
        );
      }

      // Email: optional, but must be valid if filled
      if (emailInput && emailInput.value.trim() !== "") {
        const emailVal = emailInput.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailVal)) {
          hasError = true;
          showError(emailInput, "Please enter a valid email address.");
        }
      }

      if (hasError) {
        e.preventDefault();
        submitBtn.disabled = false;
        submitBtn.textContent = "CONFIRM ORDER";
        return;
      }

      // Frontend duplicate protection
      if (localStorage.getItem("order_submitted") === "true") {
        e.preventDefault();
        submitBtn.disabled = true;
        submitBtn.textContent = "Request already submitted";
        return;
      }

      submitBtn.disabled = true;
      submitBtn.textContent = "Sending…";
      localStorage.setItem("order_submitted", "true");
    });
  }
});

// GALLERY (used via onclick in HTML)
function changeImage(element) {
  const mainImg = document.getElementById("currentImg");
  if (mainImg) {
    mainImg.style.opacity = 0;

    setTimeout(() => {
      mainImg.src = element.src;
      mainImg.style.opacity = 1;
    }, 200);
  }

  let thumbnails = document.querySelectorAll(".thumbnails img");
  thumbnails.forEach((thumb) => thumb.classList.remove("active-thumb"));
  element.classList.add("active-thumb");
}

// REVIEWS SLIDER
function slideReviews(direction) {
  const container = document.getElementById("reviewsSlider");
  const scrollAmount = 300;

  if (container) {
    if (direction === 1) {
      container.scrollBy({ left: scrollAmount, behavior: "smooth" });
    } else {
      container.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    }
  }
}
