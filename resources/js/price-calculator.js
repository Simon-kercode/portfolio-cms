export default function priceCalculator() {
    return {
      services: [
        {
          name: "Site Web Vitrine",
          description: "Site web professionnel avec design responsive et futuriste",
          price: 1500,
          selected: false,
        },
        {
          name: "Site E-commerce",
          description: "Boutique en ligne complète avec paiement sécurisé et design moderne",
          price: 3200,
          selected: false,
        },
        {
          name: "Application Web sur Mesure",
          description: "Application web personnalisée avec interface futuriste",
          price: 4500,
          selected: false,
        },
        {
          name: "API RESTful",
          description: "Développement d'API pour connecter vos services",
          price: 2200,
          selected: false,
        },
        {
          name: "Maintenance Mensuelle",
          description: "Support technique et mises à jour régulières",
          price: 450,
          selected: false,
        },
        {
          name: "Optimisation SEO",
          description: "Amélioration du référencement de votre site",
          price: 950,
          selected: false,
        },
      ],
      get totalPrice() {
        return this.services.filter((service) => service.selected).reduce((total, service) => total + service.price, 0)
      },
      formatPrice(price) {
        return new Intl.NumberFormat("fr-FR", {
          style: "currency",
          currency: "EUR",
        }).format(price)
      },
    }
  }
  