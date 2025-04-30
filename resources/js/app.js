import "./bootstrap"
import priceCalculator from "./price-calculator"

window.priceCalculator = priceCalculator;

// Theme toggle functionality
document.addEventListener("DOMContentLoaded", () => {
  // Force dark mode for futuristic theme
  document.documentElement.classList.add("dark")

  // Add animation to elements when they come into view
  const animateOnScroll = () => {
    const elements = document.querySelectorAll(".futuristic-card, .gradient-text, .btn-futuristic")

    elements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top
      const elementBottom = element.getBoundingClientRect().bottom

      if (elementTop < window.innerHeight && elementBottom > 0) {
        element.classList.add("animate-pulse-slow")
        setTimeout(() => {
          element.classList.remove("animate-pulse-slow")
        }, 1000)
      }
    })
  }

  // Initial check
  animateOnScroll()

  // Check on scroll
  window.addEventListener("scroll", animateOnScroll)
})
