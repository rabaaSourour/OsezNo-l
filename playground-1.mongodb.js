// The current database to use.
use("oseznoel");

// Utilisation de insertMany pour ajouter toutes les surprises dans MongoDB
db.getCollection("surprises").insertMany([
    {
        "day": 1,
        "quote": "L'avenir appartient à ceux qui croient en la beauté de leurs rêves. - Eleanor Roosevelt"
    },
    {
        "day": 2,
        "quote": "Soyez le changement que vous voulez voir dans le monde. - Mahatma Gandhi"
    },
    {
        "day": 3,
        "quote": "La vie est un mystère qu'il faut vivre, et non un problème avant d'avoir réussi. - Olivier Lockert"
    },
    {
        "day": 5,
        "quote": "La seule limite à notre épanouissement de demain sera nos doutes d'aujourd'hui. - Franklin D. Roosevelt"
    },
    {
        "day": 6,
        "quote": "Le bonheur est parfois caché dans l'inconnu. - Victor Hugo"
    },
    {
        "day": 7,
        "quote": "Ne jugez pas chaque jour à la récolte que vous faites, mais aux graines que vous plantez. - Robert Louis Stevenson"
    },
    {
        "day": 8,
        "quote": "Crois en toi-même et tout devient possible. - Goethe"
    },
    {
        "day": 9,
        "quote": "Le succès, c'est tomber sept fois, se relever huit. - Proverbe japonais"
    },
    {
        "day": 10,
        "quote": "Nous sommes ce que nous faisons de manière répétée. L'excellence n'est donc pas un acte, mais une habitude. - Aristote"
    },
    {
        "day": 11,
        "quote": "Ce n'est pas ce que tu regardes qui compte, c'est ce que tu vois. - Henry David Thoreau"
    },
    {
        "day": 12,
        "quote": "Le meilleur moyen de prévoir l'avenir est de le créer. - Peter Drucker"
    },
    {
        "day": 13,
        "quote": "L'imagination est plus importante que la connaissance. - Albert Einstein"
    },
    {
        "day": 14,
        "quote": "Rien n'est impossible, la persévérance fait des miracles. - Jean de La Fontaine"
    },
    {
        "day": 15,
        "quote": "Faites que le rêve dévore votre vie afin que la vie ne dévore pas votre rêve. - Antoine de Saint-Exupéry"
    },
    {
        "day": 16,
        "quote": "Le courage n'est pas l'absence de peur, mais la capacité de vaincre ce qui fait peur. - Nelson Mandela"
    },
    {
        "day": 17,
        "quote": "Le seul véritable échec est celui de ne pas essayer. - Georges Clemenceau"
    },
    {
        "day": 18,
        "quote": "La simplicité est la sophistication suprême. - Léonard de Vinci"
    },
    {
        "day": 19,
        "quote": "C'est en continu que le singe apprend à bondir. - Proverbe africain"
    },
    {
        "day": 20,
        "quote": "La seule façon de faire un excellent travail est d'aimer ce que vous faites. - Steve Jobs"
    },
    {
        "day": 21,
        "quote": "Chaque jour est une nouvelle opportunité de changer votre vie. - Confucius"
    },
    {
        "day": 22,
        "quote": "Ce que l'esprit peut concevoir et croire, il peut l'accomplir. - Napoleon Hill"
    },
    {
        "day": 23,
        "quote": "Les grandes choses ne sont jamais faites par une seule personne. Jobs"
    },
    {
        "day": 24,
        "quote": "La vie est un défi à relever, un bonheur à mériter, une aventure à tenter - Mère Teresa"
    }
]);
