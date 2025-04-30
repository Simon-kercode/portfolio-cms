import "./bootstrap"

// Force dark mode for futuristic theme
document.addEventListener("DOMContentLoaded", () => {
  document.documentElement.classList.add("dark")

  // Add animation to cards when they come into view
  const animateOnScroll = () => {
    const cards = document.querySelectorAll(".futuristic-card")

    cards.forEach((card) => {
      const cardTop = card.getBoundingClientRect().top
      const cardBottom = card.getBoundingClientRect().bottom

      if (cardTop < window.innerHeight && cardBottom > 0) {
        card.style.transform = "translateY(0)"
        card.style.opacity = "1"
      }
    })
  }

  // Set initial state for cards
  const cards = document.querySelectorAll(".futuristic-card")
  cards.forEach((card) => {
    card.style.transform = "translateY(20px)"
    card.style.opacity = "0"
    card.style.transition = "transform 0.5s ease, opacity 0.5s ease"
  })

  // Initial check
  setTimeout(() => {
    animateOnScroll()
  }, 100)

  // Check on scroll
  window.addEventListener("scroll", animateOnScroll)

  // Search functionality for projects and services
  const projectSearch = document.getElementById("project-search")
  if (projectSearch) {
    projectSearch.addEventListener("input", function () {
      const searchTerm = this.value.toLowerCase()
      const projectRows = document.querySelectorAll("tbody tr")

      projectRows.forEach((row) => {
        const projectName = row.querySelector("td:first-child").textContent.toLowerCase()
        const projectCategory = row.querySelector("td:nth-child(2)").textContent.toLowerCase()

        if (projectName.includes(searchTerm) || projectCategory.includes(searchTerm)) {
          row.style.display = ""
        } else {
          row.style.display = "none"
        }
      })
    })
  }

  const serviceSearch = document.getElementById("service-search")
  if (serviceSearch) {
    serviceSearch.addEventListener("input", function () {
      const searchTerm = this.value.toLowerCase()
      const serviceCards = document.querySelectorAll(".grid > .futuristic-card")

      serviceCards.forEach((card) => {
        const serviceName = card.querySelector("h3").textContent.toLowerCase()
        const serviceDescription = card.querySelector("p").textContent.toLowerCase()

        if (serviceName.includes(searchTerm) || serviceDescription.includes(searchTerm)) {
          card.style.display = ""
        } else {
          card.style.display = "none"
        }
      })
    })
  }
})
