<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StartupCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'parent_id' => 0,
                'slug' => 'technology-software',
                'name' => 'Technology & Software',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technology & Software',
                    'de' => 'Technologie & Software',
                    'es' => 'Tecnología y Software',
                    'pl' => 'Technologia i Oprogramowanie'
                ]),
                'scom' => 'Startups focused on software development, SaaS, AI, and tech solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on software development, SaaS, AI, and tech solutions',
                    'de' => 'Startups mit Fokus auf Softwareentwicklung, SaaS, KI und Tech-Lösungen',
                    'es' => 'Startups enfocadas en desarrollo de software, SaaS, IA y soluciones tecnológicas',
                    'pl' => 'Startupy skupione na rozwoju oprogramowania, SaaS, AI i rozwiązaniach technologicznych'
                ])
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'slug' => 'e-commerce-marketplace',
                'name' => 'E-commerce & Marketplace',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'E-commerce & Marketplace',
                    'de' => 'E-Commerce & Marktplatz',
                    'es' => 'E-commerce y Marketplace',
                    'pl' => 'E-commerce i Marketplace'
                ]),
                'scom' => 'Startups focused on online retail, marketplaces, and e-commerce solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on online retail, marketplaces, and e-commerce solutions',
                    'de' => 'Startups mit Fokus auf Online-Einzelhandel, Marktplätze und E-Commerce-Lösungen',
                    'es' => 'Startups enfocadas en comercio electrónico, marketplaces y soluciones de e-commerce',
                    'pl' => 'Startupy skupione na handlu elektronicznym, marketplace i rozwiązaniach e-commerce'
                ])
            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'slug' => 'fintech-finance',
                'name' => 'Fintech & Finance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fintech & Finance',
                    'de' => 'Fintech & Finanzen',
                    'es' => 'Fintech y Finanzas',
                    'pl' => 'Fintech i Finanse'
                ]),
                'scom' => 'Startups focused on financial technology, banking, and investment solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on financial technology, banking, and investment solutions',
                    'de' => 'Startups mit Fokus auf Finanztechnologie, Banking und Investitionslösungen',
                    'es' => 'Startups enfocadas en tecnología financiera, banca y soluciones de inversión',
                    'pl' => 'Startupy skupione na technologii finansowej, bankowości i rozwiązaniach inwestycyjnych'
                ])
            ],
            [
                'id' => 4,
                'parent_id' => 0,
                'slug' => 'healthcare-biotech',
                'name' => 'Healthcare & Biotech',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Healthcare & Biotech',
                    'de' => 'Gesundheitswesen & Biotechnologie',
                    'es' => 'Salud y Biotecnología',
                    'pl' => 'Opieka zdrowotna i Biotechnologia'
                ]),
                'scom' => 'Startups focused on healthcare, biotechnology, and medical solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on healthcare, biotechnology, and medical solutions',
                    'de' => 'Startups mit Fokus auf Gesundheitswesen, Biotechnologie und medizinische Lösungen',
                    'es' => 'Startups enfocadas en salud, biotecnología y soluciones médicas',
                    'pl' => 'Startupy skupione na opiece zdrowotnej, biotechnologii i rozwiązaniach medycznych'
                ])
            ],
            [
                'id' => 5,
                'parent_id' => 0,
                'slug' => 'media-entertainment',
                'name' => 'Media & Entertainment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Media & Entertainment',
                    'de' => 'Medien & Unterhaltung',
                    'es' => 'Medios y Entretenimiento',
                    'pl' => 'Media i Rozrywka'
                ]),
                'scom' => 'Startups focused on media, entertainment, content creation, and streaming',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on media, entertainment, content creation, and streaming',
                    'de' => 'Startups mit Fokus auf Medien, Unterhaltung, Content-Erstellung und Streaming',
                    'es' => 'Startups enfocadas en medios, entretenimiento, creación de contenido y streaming',
                    'pl' => 'Startupy skupione na mediach, rozrywce, tworzeniu treści i transmisji strumieniowej'
                ])
            ],
            [
                'id' => 6,
                'parent_id' => 0,
                'slug' => 'education-learning',
                'name' => 'Education & Learning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Education & Learning',
                    'de' => 'Bildung & Lernen',
                    'es' => 'Educación y Aprendizaje',
                    'pl' => 'Edukacja i Nauka'
                ]),
                'scom' => 'Startups focused on education, e-learning, and training solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on education, e-learning, and training solutions',
                    'de' => 'Startups mit Fokus auf Bildung, E-Learning und Schulungslösungen',
                    'es' => 'Startups enfocadas en educación, e-learning y soluciones de capacitación',
                    'pl' => 'Startupy skupione na edukacji, e-learningu i rozwiązaniach szkoleniowych'
                ])
            ],
            [
                'id' => 7,
                'parent_id' => 0,
                'slug' => 'transportation-mobility',
                'name' => 'Transportation & Mobility',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Transportation & Mobility',
                    'de' => 'Transport & Mobilität',
                    'es' => 'Transporte y Movilidad',
                    'pl' => 'Transport i Mobilność'
                ]),
                'scom' => 'Startups focused on transportation, logistics, and mobility solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on transportation, logistics, and mobility solutions',
                    'de' => 'Startups mit Fokus auf Transport, Logistik und Mobilitätslösungen',
                    'es' => 'Startups enfocadas en transporte, logística y soluciones de movilidad',
                    'pl' => 'Startupy skupione na transporcie, logistyce i rozwiązaniach mobilności'
                ])
            ],
            [
                'id' => 8,
                'parent_id' => 0,
                'slug' => 'real-estate-proptech',
                'name' => 'Real Estate & PropTech',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate & PropTech',
                    'de' => 'Immobilien & PropTech',
                    'es' => 'Bienes Raíces y PropTech',
                    'pl' => 'Nieruchomości i PropTech'
                ]),
                'scom' => 'Startups focused on real estate, property technology, and housing solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on real estate, property technology, and housing solutions',
                    'de' => 'Startups mit Fokus auf Immobilien, PropTech und Wohnlösungen',
                    'es' => 'Startups enfocadas en bienes raíces, tecnología inmobiliaria y soluciones de vivienda',
                    'pl' => 'Startupy skupione na nieruchomościach, technologii nieruchomości i rozwiązaniach mieszkaniowych'
                ])
            ],
            [
                'id' => 9,
                'parent_id' => 0,
                'slug' => 'food-agriculture',
                'name' => 'Food & Agriculture',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food & Agriculture',
                    'de' => 'Essen & Landwirtschaft',
                    'es' => 'Alimentos y Agricultura',
                    'pl' => 'Żywność i Rolnictwo'
                ]),
                'scom' => 'Startups focused on food technology, agriculture, and sustainable solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on food technology, agriculture, and sustainable solutions',
                    'de' => 'Startups mit Fokus auf Lebensmitteltechnologie, Landwirtschaft und nachhaltige Lösungen',
                    'es' => 'Startups enfocadas en tecnología alimentaria, agricultura y soluciones sostenibles',
                    'pl' => 'Startupy skupione na technologii żywności, rolnictwie i zrównoważonych rozwiązaniach'
                ])
            ],
            [
                'id' => 10,
                'parent_id' => 0,
                'slug' => 'energy-environment',
                'name' => 'Energy & Environment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Energy & Environment',
                    'de' => 'Energie & Umwelt',
                    'es' => 'Energía y Medio Ambiente',
                    'pl' => 'Energia i Środowisko'
                ]),
                'scom' => 'Startups focused on renewable energy, environmental solutions, and sustainability',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on renewable energy, environmental solutions, and sustainability',
                    'de' => 'Startups mit Fokus auf erneuerbare Energien, Umweltlösungen und Nachhaltigkeit',
                    'es' => 'Startups enfocadas en energía renovable, soluciones ambientales y sostenibilidad',
                    'pl' => 'Startupy skupione na energii odnawialnej, rozwiązaniach środowiskowych i zrównoważonym rozwoju'
                ])
            ],
            [
                'id' => 11,
                'parent_id' => 0,
                'slug' => 'human-resources-workforce',
                'name' => 'Human Resources & Workforce',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Human Resources & Workforce',
                    'de' => 'Personalwesen & Arbeitskräfte',
                    'es' => 'Recursos Humanos y Fuerza Laboral',
                    'pl' => 'Zasoby Ludzkie i Siła Robocza'
                ]),
                'scom' => 'Startups focused on HR technology, workforce management, and recruitment solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on HR technology, workforce management, and recruitment solutions',
                    'de' => 'Startups mit Fokus auf HR-Technologie, Personalmanagement und Rekrutierungslösungen',
                    'es' => 'Startups enfocadas en tecnología de recursos humanos, gestión de la fuerza laboral y soluciones de reclutamiento',
                    'pl' => 'Startupy skupione na technologii HR, zarządzaniu siłą roboczą i rozwiązaniach rekrutacyjnych'
                ])
            ],
            [
                'id' => 12,
                'parent_id' => 0,
                'slug' => 'business-services',
                'name' => 'Business Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Services',
                    'de' => 'Geschäftsservices',
                    'es' => 'Servicios Empresariales',
                    'pl' => 'Usługi Biznesowe'
                ]),
                'scom' => 'Startups focused on business services, consulting, and professional solutions',
                'scom_translations' => json_encode([
                    'en' => 'Startups focused on business services, consulting, and professional solutions',
                    'de' => 'Startups mit Fokus auf Geschäftsservices, Beratung und professionelle Lösungen',
                    'es' => 'Startups enfocadas en servicios empresariales, consultoría y soluciones profesionales',
                    'pl' => 'Startupy skupione na usługach biznesowych, doradztwie i rozwiązaniach profesjonalnych'
                ])
            ],
            [
                'id' => 13,
                'parent_id' => 0,
                'slug' => 'other',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Startups that do not fit into the main categories, including niche and emerging technologies',
                'scom_translations' => json_encode([
                    'en' => 'Startups that do not fit into the main categories, including niche and emerging technologies',
                    'de' => 'Startups, die nicht in die Hauptkategorien passen, einschließlich Nischen- und aufstrebende Technologien',
                    'es' => 'Startups que no encajan en las categorías principales, incluidas tecnologías de nicho y emergentes',
                    'pl' => 'Startupy, które nie pasują do głównych kategorii, w tym niszowe i wschodzące technologie'
                ])
            ],
            [
                'id' => 14,
                'parent_id' => 1, // Technology & Software
                'slug' => 'saas-software-as-a-service',
                'name' => 'SaaS (Software as a Service)',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'SaaS (Software as a Service)',
                    'de' => 'SaaS (Software as a Service)',
                    'es' => 'SaaS (Software como Servicio)',
                    'pl' => 'SaaS (Oprogramowanie jako Usługa)'
                ]),
                'scom' => 'Cloud-based software solutions delivered as subscription services',
                'scom_translations' => json_encode([
                    'en' => 'Cloud-based software solutions delivered as subscription services',
                    'de' => 'Cloud-basierte Softwarelösungen als Abonnement-Services',
                    'es' => 'Soluciones de software basadas en la nube entregadas como servicios de suscripción',
                    'pl' => 'Rozwiązania oprogramowania w chmurze dostarczane jako usługi subskrypcyjne'
                ])
            ],
            [
                'id' => 15,
                'parent_id' => 1,
                'slug' => 'mobile-apps',
                'name' => 'Mobile Apps',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mobile Apps',
                    'de' => 'Mobile Apps',
                    'es' => 'Aplicaciones Móviles',
                    'pl' => 'Aplikacje Mobilne'
                ]),
                'scom' => 'Applications designed for smartphones, tablets, and mobile devices',
                'scom_translations' => json_encode([
                    'en' => 'Applications designed for smartphones, tablets, and mobile devices',
                    'de' => 'Anwendungen für Smartphones, Tablets und mobile Geräte',
                    'es' => 'Aplicaciones diseñadas para smartphones, tablets y dispositivos móviles',
                    'pl' => 'Aplikacje przeznaczone na smartfony, tablety i urządzenia mobilne'
                ])
            ],
            [
                'id' => 16,
                'parent_id' => 1,
                'slug' => 'web-development',
                'name' => 'Web Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Web Development',
                    'de' => 'Web-Entwicklung',
                    'es' => 'Desarrollo Web',
                    'pl' => 'Rozwój Stron Internetowych'
                ]),
                'scom' => 'Tools and platforms for building websites and web applications',
                'scom_translations' => json_encode([
                    'en' => 'Tools and platforms for building websites and web applications',
                    'de' => 'Tools und Plattformen für die Erstellung von Websites und Webanwendungen',
                    'es' => 'Herramientas y plataformas para construir sitios web y aplicaciones web',
                    'pl' => 'Narzędzia i platformy do budowy stron internetowych i aplikacji webowych'
                ])
            ],
            [
                'id' => 17,
                'parent_id' => 1,
                'slug' => 'ai-machine-learning',
                'name' => 'AI & Machine Learning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'AI & Machine Learning',
                    'de' => 'KI & Maschinelles Lernen',
                    'es' => 'IA y Aprendizaje Automático',
                    'pl' => 'AI i Uczenie Maszynowe'
                ]),
                'scom' => 'Artificial intelligence, machine learning, and automation solutions',
                'scom_translations' => json_encode([
                    'en' => 'Artificial intelligence, machine learning, and automation solutions',
                    'de' => 'Künstliche Intelligenz, maschinelles Lernen und Automatisierungslösungen',
                    'es' => 'Inteligencia artificial, aprendizaje automático y soluciones de automatización',
                    'pl' => 'Sztuczna inteligencja, uczenie maszynowe i rozwiązania automatyzacji'
                ])
            ],
            [
                'id' => 18,
                'parent_id' => 1,
                'slug' => 'cybersecurity',
                'name' => 'Cybersecurity',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cybersecurity',
                    'de' => 'Cybersicherheit',
                    'es' => 'Ciberseguridad',
                    'pl' => 'Cyberbezpieczeństwo'
                ]),
                'scom' => 'Security solutions to protect digital assets and data',
                'scom_translations' => json_encode([
                    'en' => 'Security solutions to protect digital assets and data',
                    'de' => 'Sicherheitslösungen zum Schutz digitaler Assets und Daten',
                    'es' => 'Soluciones de seguridad para proteger activos digitales y datos',
                    'pl' => 'Rozwiązania bezpieczeństwa chroniące zasoby cyfrowe i dane'
                ])
            ],
            [
                'id' => 19,
                'parent_id' => 1,
                'slug' => 'cloud-computing',
                'name' => 'Cloud Computing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cloud Computing',
                    'de' => 'Cloud Computing',
                    'es' => 'Computación en la Nube',
                    'pl' => 'Przetwarzanie w Chmurze'
                ]),
                'scom' => 'Cloud infrastructure, platforms, and distributed computing services',
                'scom_translations' => json_encode([
                    'en' => 'Cloud infrastructure, platforms, and distributed computing services',
                    'de' => 'Cloud-Infrastruktur, -Plattformen und verteilte Computing-Services',
                    'es' => 'Infraestructura en la nube, plataformas y servicios de computación distribuida',
                    'pl' => 'Infrastruktura chmurowa, platformy i usługi przetwarzania rozproszonego'
                ])
            ],
            [
                'id' => 20,
                'parent_id' => 1,
                'slug' => 'devops-infrastructure',
                'name' => 'DevOps & Infrastructure',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'DevOps & Infrastructure',
                    'de' => 'DevOps & Infrastruktur',
                    'es' => 'DevOps e Infraestructura',
                    'pl' => 'DevOps i Infrastruktura'
                ]),
                'scom' => 'Development operations, CI/CD, and infrastructure management tools',
                'scom_translations' => json_encode([
                    'en' => 'Development operations, CI/CD, and infrastructure management tools',
                    'de' => 'Entwicklungsoperationen, CI/CD und Tools für das Infrastruktur-Management',
                    'es' => 'Operaciones de desarrollo, CI/CD y herramientas de gestión de infraestructura',
                    'pl' => 'Operacje rozwojowe, CI/CD i narzędzia zarządzania infrastrukturą'
                ])
            ],
            [
                'id' => 21,
                'parent_id' => 1,
                'slug' => 'blockchain-cryptocurrency',
                'name' => 'Blockchain & Cryptocurrency',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Blockchain & Cryptocurrency',
                    'de' => 'Blockchain & Kryptowährung',
                    'es' => 'Blockchain y Criptomonedas',
                    'pl' => 'Blockchain i Kryptowaluty'
                ]),
                'scom' => 'Distributed ledger technology and cryptocurrency solutions',
                'scom_translations' => json_encode([
                    'en' => 'Distributed ledger technology and cryptocurrency solutions',
                    'de' => 'Distributed-Ledger-Technologie und Kryptowährungslösungen',
                    'es' => 'Tecnología de registro distribuido y soluciones de criptomonedas',
                    'pl' => 'Technologia rozproszonej księgi i rozwiązania kryptowalutowe'
                ])
            ],
            [
                'id' => 22,
                'parent_id' => 1,
                'slug' => 'iot-internet-of-things',
                'name' => 'IoT (Internet of Things)',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'IoT (Internet of Things)',
                    'de' => 'IoT (Internet der Dinge)',
                    'es' => 'IoT (Internet de las Cosas)',
                    'pl' => 'IoT (Internet Rzeczy)'
                ]),
                'scom' => 'Connected devices and smart systems for various applications',
                'scom_translations' => json_encode([
                    'en' => 'Connected devices and smart systems for various applications',
                    'de' => 'Vernetzte Geräte und intelligente Systeme für verschiedene Anwendungen',
                    'es' => 'Dispositivos conectados y sistemas inteligentes para diversas aplicaciones',
                    'pl' => 'Podłączone urządzenia i inteligentne systemy dla różnych zastosowań'
                ])
            ],
            [
                'id' => 23,
                'parent_id' => 1,
                'slug' => 'ar-vr-extended-reality',
                'name' => 'AR/VR & Extended Reality',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'AR/VR & Extended Reality',
                    'de' => 'AR/VR & Extended Reality',
                    'es' => 'AR/VR y Realidad Extendida',
                    'pl' => 'AR/VR i Rzeczywistość Rozszerzona'
                ]),
                'scom' => 'Augmented reality, virtual reality, and immersive technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'Augmented reality, virtual reality, and immersive technology solutions',
                    'de' => 'Augmented Reality, Virtual Reality und immersive Technologielösungen',
                    'es' => 'Realidad aumentada, realidad virtual y soluciones de tecnología inmersiva',
                    'pl' => 'Rzeczywistość rozszerzona, rzeczywistość wirtualna i rozwiązania technologii immersyjnej'
                ])
            ],
            [
                'id' => 24,
                'parent_id' => 1,
                'slug' => 'other-technology',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Technology and software solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Technology and software solutions that do not fit into the main subcategories',
                    'de' => 'Technologie- und Softwarelösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de tecnología y software que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania technologiczne i oprogramowanie, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 25,
                'parent_id' => 2,
                'slug' => 'online-retail',
                'name' => 'Online Retail',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Retail',
                    'de' => 'Online-Einzelhandel',
                    'es' => 'Venta en Línea',
                    'pl' => 'Handel Internetowy'
                ]),
                'scom' => 'Direct-to-consumer online retail stores and platforms',
                'scom_translations' => json_encode([
                    'en' => 'Direct-to-consumer online retail stores and platforms',
                    'de' => 'Direkt-an-Verbraucher Online-Shops und Plattformen',
                    'es' => 'Tiendas y plataformas de venta directa al consumidor en línea',
                    'pl' => 'Sklepy internetowe i platformy sprzedaży bezpośredniej do konsumenta'
                ])
            ],
            [
                'id' => 26,
                'parent_id' => 2,
                'slug' => 'b2b-marketplaces',
                'name' => 'B2B Marketplaces',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'B2B Marketplaces',
                    'de' => 'B2B-Marktplätze',
                    'es' => 'Marketplaces B2B',
                    'pl' => 'Platformy B2B'
                ]),
                'scom' => 'Business-to-business trading platforms and wholesale marketplaces',
                'scom_translations' => json_encode([
                    'en' => 'Business-to-business trading platforms and wholesale marketplaces',
                    'de' => 'Business-to-Business-Handelsplattformen und Großhandels-Marktplätze',
                    'es' => 'Plataformas de comercio empresarial y marketplaces mayoristas',
                    'pl' => 'Platformy handlu B2B i rynki hurtowe'
                ])
            ],
            [
                'id' => 27,
                'parent_id' => 2,
                'slug' => 'c2c-marketplaces',
                'name' => 'C2C Marketplaces',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'C2C Marketplaces',
                    'de' => 'C2C-Marktplätze',
                    'es' => 'Marketplaces C2C',
                    'pl' => 'Platformy C2C'
                ]),
                'scom' => 'Consumer-to-consumer marketplaces for peer-to-peer transactions',
                'scom_translations' => json_encode([
                    'en' => 'Consumer-to-consumer marketplaces for peer-to-peer transactions',
                    'de' => 'Verbraucher-zu-Verbraucher-Marktplätze für Peer-to-Peer-Transaktionen',
                    'es' => 'Marketplaces de consumidor a consumidor para transacciones entre pares',
                    'pl' => 'Platformy konsument-konsument dla transakcji peer-to-peer'
                ])
            ],
            [
                'id' => 28,
                'parent_id' => 2,
                'slug' => 'dropshipping',
                'name' => 'Dropshipping',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Dropshipping',
                    'de' => 'Dropshipping',
                    'es' => 'Dropshipping',
                    'pl' => 'Dropshipping'
                ]),
                'scom' => 'Retail fulfillment method where stores don\'t keep products in stock',
                'scom_translations' => json_encode([
                    'en' => 'Retail fulfillment method where stores don\'t keep products in stock',
                    'de' => 'Einzelhandels-Fulfillment-Methode, bei der Geschäfte keine Produkte auf Lager halten',
                    'es' => 'Método de cumplimiento minorista donde las tiendas no mantienen productos en stock',
                    'pl' => 'Metoda realizacji sprzedaży detalicznej, gdzie sklepy nie trzymają produktów w magazynie'
                ])
            ],
            [
                'id' => 29,
                'parent_id' => 2,
                'slug' => 'subscription-commerce',
                'name' => 'Subscription Commerce',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Subscription Commerce',
                    'de' => 'Abonnement-Handel',
                    'es' => 'Comercio por Suscripción',
                    'pl' => 'Handel Subskrypcyjny'
                ]),
                'scom' => 'Recurring revenue business models with subscription-based product delivery',
                'scom_translations' => json_encode([
                    'en' => 'Recurring revenue business models with subscription-based product delivery',
                    'de' => 'Wiederkehrende Umsatz-Geschäftsmodelle mit abonnementbasierter Produktlieferung',
                    'es' => 'Modelos de negocio de ingresos recurrentes con entrega de productos basada en suscripción',
                    'pl' => 'Modele biznesowe z powtarzającymi się przychodami i dostawą produktów na zasadzie subskrypcji'
                ])
            ],
            [
                'id' => 30,
                'parent_id' => 2,
                'slug' => 'social-commerce',
                'name' => 'Social Commerce',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Commerce',
                    'de' => 'Social Commerce',
                    'es' => 'Comercio Social',
                    'pl' => 'Handel Społecznościowy'
                ]),
                'scom' => 'Shopping experiences integrated with social media platforms',
                'scom_translations' => json_encode([
                    'en' => 'Shopping experiences integrated with social media platforms',
                    'de' => 'Shopping-Erlebnisse integriert in Social-Media-Plattformen',
                    'es' => 'Experiencias de compra integradas con plataformas de redes sociales',
                    'pl' => 'Doświadczenia zakupowe zintegrowane z platformami mediów społecznościowych'
                ])
            ],
            [
                'id' => 31,
                'parent_id' => 2,
                'slug' => 'other-ecommerce',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'E-commerce and marketplace solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'E-commerce and marketplace solutions that do not fit into the main subcategories',
                    'de' => 'E-Commerce- und Marktplatz-Lösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de e-commerce y marketplace que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania e-commerce i marketplace, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 32,
                'parent_id' => 3, // Fintech & Finance
                'slug' => 'digital-banking',
                'name' => 'Digital Banking',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Banking',
                    'de' => 'Digitales Banking',
                    'es' => 'Banca Digital',
                    'pl' => 'Bankowość Cyfrowa'
                ]),
                'scom' => 'Online-only banks and digital banking platforms and services',
                'scom_translations' => json_encode([
                    'en' => 'Online-only banks and digital banking platforms and services',
                    'de' => 'Reine Online-Banken und digitale Banking-Plattformen und -Services',
                    'es' => 'Bancos solo en línea y plataformas y servicios de banca digital',
                    'pl' => 'Banki internetowe i platformy oraz usługi bankowości cyfrowej'
                ])
            ],
            [
                'id' => 33,
                'parent_id' => 3,
                'slug' => 'payment-processing',
                'name' => 'Payment Processing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Payment Processing',
                    'de' => 'Zahlungsabwicklung',
                    'es' => 'Procesamiento de Pagos',
                    'pl' => 'Przetwarzanie Płatności'
                ]),
                'scom' => 'Payment gateways, processors, and digital payment solutions',
                'scom_translations' => json_encode([
                    'en' => 'Payment gateways, processors, and digital payment solutions',
                    'de' => 'Zahlungs-Gateways, -Prozessoren und digitale Zahlungslösungen',
                    'es' => 'Pasarelas de pago, procesadores y soluciones de pago digital',
                    'pl' => 'Bramki płatnicze, procesory i rozwiązania płatności cyfrowych'
                ])
            ],
            [
                'id' => 34,
                'parent_id' => 3,
                'slug' => 'lending-credit',
                'name' => 'Lending & Credit',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lending & Credit',
                    'de' => 'Kredite & Darlehen',
                    'es' => 'Préstamos y Crédito',
                    'pl' => 'Pożyczki i Kredyty'
                ]),
                'scom' => 'Digital lending platforms, credit scoring, and loan management solutions',
                'scom_translations' => json_encode([
                    'en' => 'Digital lending platforms, credit scoring, and loan management solutions',
                    'de' => 'Digitale Kreditplattformen, Kredit-Scoring und Kreditmanagement-Lösungen',
                    'es' => 'Plataformas de préstamos digitales, puntuación crediticia y soluciones de gestión de préstamos',
                    'pl' => 'Platformy pożyczek cyfrowych, ocena kredytowa i rozwiązania zarządzania pożyczkami'
                ])
            ],
            [
                'id' => 35,
                'parent_id' => 3,
                'slug' => 'investment-trading',
                'name' => 'Investment & Trading',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investment & Trading',
                    'de' => 'Investment & Trading',
                    'es' => 'Inversión y Trading',
                    'pl' => 'Inwestycje i Trading'
                ]),
                'scom' => 'Investment platforms, trading apps, and wealth management solutions',
                'scom_translations' => json_encode([
                    'en' => 'Investment platforms, trading apps, and wealth management solutions',
                    'de' => 'Investment-Plattformen, Trading-Apps und Vermögensverwaltungslösungen',
                    'es' => 'Plataformas de inversión, aplicaciones de trading y soluciones de gestión de patrimonio',
                    'pl' => 'Platformy inwestycyjne, aplikacje tradingowe i rozwiązania zarządzania majątkiem'
                ])
            ],
            [
                'id' => 36,
                'parent_id' => 3,
                'slug' => 'insurance-technology',
                'name' => 'Insurance Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Insurance Technology',
                    'de' => 'Versicherungstechnologie',
                    'es' => 'Tecnología de Seguros',
                    'pl' => 'Technologia Ubezpieczeniowa'
                ]),
                'scom' => 'Insurtech solutions, digital insurance platforms, and risk assessment tools',
                'scom_translations' => json_encode([
                    'en' => 'Insurtech solutions, digital insurance platforms, and risk assessment tools',
                    'de' => 'Insurtech-Lösungen, digitale Versicherungsplattformen und Risikobewertungstools',
                    'es' => 'Soluciones insurtech, plataformas de seguros digitales y herramientas de evaluación de riesgos',
                    'pl' => 'Rozwiązania insurtech, platformy ubezpieczeń cyfrowych i narzędzia oceny ryzyka'
                ])
            ],
            [
                'id' => 37,
                'parent_id' => 3,
                'slug' => 'personal-finance',
                'name' => 'Personal Finance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Finance',
                    'de' => 'Persönliche Finanzen',
                    'es' => 'Finanzas Personales',
                    'pl' => 'Finanse Osobiste'
                ]),
                'scom' => 'Personal finance management, budgeting, and financial planning tools',
                'scom_translations' => json_encode([
                    'en' => 'Personal finance management, budgeting, and financial planning tools',
                    'de' => 'Persönliches Finanzmanagement, Budgetierung und Finanzplanungstools',
                    'es' => 'Gestión de finanzas personales, presupuestos y herramientas de planificación financiera',
                    'pl' => 'Zarządzanie finansami osobistymi, budżetowanie i narzędzia planowania finansowego'
                ])
            ],
            [
                'id' => 38,
                'parent_id' => 3,
                'slug' => 'cryptocurrency-defi',
                'name' => 'Cryptocurrency & DeFi',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cryptocurrency & DeFi',
                    'de' => 'Kryptowährung & DeFi',
                    'es' => 'Criptomonedas y DeFi',
                    'pl' => 'Kryptowaluty i DeFi'
                ]),
                'scom' => 'Cryptocurrency exchanges, wallets, and decentralized finance solutions',
                'scom_translations' => json_encode([
                    'en' => 'Cryptocurrency exchanges, wallets, and decentralized finance solutions',
                    'de' => 'Kryptowährungs-Börsen, Wallets und dezentrale Finanzlösungen',
                    'es' => 'Exchanges de criptomonedas, wallets y soluciones de finanzas descentralizadas',
                    'pl' => 'Giełdy kryptowalut, portfele i rozwiązania zdecentralizowanych finansów'
                ])
            ],
            [
                'id' => 39,
                'parent_id' => 3,
                'slug' => 'regtech-regulatory-technology',
                'name' => 'RegTech (Regulatory Technology)',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'RegTech (Regulatory Technology)',
                    'de' => 'RegTech (Regulierungstechnologie)',
                    'es' => 'RegTech (Tecnología Regulatoria)',
                    'pl' => 'RegTech (Technologia Regulacyjna)'
                ]),
                'scom' => 'Compliance, regulatory reporting, and risk management technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'Compliance, regulatory reporting, and risk management technology solutions',
                    'de' => 'Compliance-, regulatorische Berichterstattungs- und Risikomanagement-Technologielösungen',
                    'es' => 'Soluciones tecnológicas de cumplimiento, informes regulatorios y gestión de riesgos',
                    'pl' => 'Rozwiązania technologiczne compliance, raportowania regulacyjnego i zarządzania ryzykiem'
                ])
            ],
            [
                'id' => 40,
                'parent_id' => 3,
                'slug' => 'other-fintech',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Fintech and finance solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Fintech and finance solutions that do not fit into the main subcategories',
                    'de' => 'Fintech- und Finanzlösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones fintech y financieras que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania fintech i finansowe, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 41,
                'parent_id' => 4, // Healthcare & Biotech
                'slug' => 'digital-health',
                'name' => 'Digital Health',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Health',
                    'de' => 'Digitale Gesundheit',
                    'es' => 'Salud Digital',
                    'pl' => 'Zdrowie Cyfrowe'
                ]),
                'scom' => 'Digital health platforms, health apps, and electronic health records',
                'scom_translations' => json_encode([
                    'en' => 'Digital health platforms, health apps, and electronic health records',
                    'de' => 'Digitale Gesundheitsplattformen, Gesundheits-Apps und elektronische Patientenakten',
                    'es' => 'Plataformas de salud digital, aplicaciones de salud y registros médicos electrónicos',
                    'pl' => 'Platformy zdrowia cyfrowego, aplikacje zdrowotne i elektroniczna dokumentacja medyczna'
                ])
            ],
            [
                'id' => 42,
                'parent_id' => 4,
                'slug' => 'telemedicine',
                'name' => 'Telemedicine',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Telemedicine',
                    'de' => 'Telemedizin',
                    'es' => 'Telemedicina',
                    'pl' => 'Telemedycyna'
                ]),
                'scom' => 'Remote healthcare delivery, virtual consultations, and telehealth platforms',
                'scom_translations' => json_encode([
                    'en' => 'Remote healthcare delivery, virtual consultations, and telehealth platforms',
                    'de' => 'Ferngesundheitsversorgung, virtuelle Konsultationen und Telehealth-Plattformen',
                    'es' => 'Prestación de atención médica remota, consultas virtuales y plataformas de telesalud',
                    'pl' => 'Zdalna opieka zdrowotna, konsultacje wirtualne i platformy telemedyczne'
                ])
            ],
            [
                'id' => 43,
                'parent_id' => 4,
                'slug' => 'medical-devices',
                'name' => 'Medical Devices',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Medical Devices',
                    'de' => 'Medizinische Geräte',
                    'es' => 'Dispositivos Médicos',
                    'pl' => 'Urządzenia Medyczne'
                ]),
                'scom' => 'Medical equipment, diagnostic devices, and healthcare hardware solutions',
                'scom_translations' => json_encode([
                    'en' => 'Medical equipment, diagnostic devices, and healthcare hardware solutions',
                    'de' => 'Medizinische Ausrüstung, Diagnosegeräte und Healthcare-Hardware-Lösungen',
                    'es' => 'Equipos médicos, dispositivos de diagnóstico y soluciones de hardware sanitario',
                    'pl' => 'Sprzęt medyczny, urządzenia diagnostyczne i rozwiązania sprzętowe dla ochrony zdrowia'
                ])
            ],
            [
                'id' => 44,
                'parent_id' => 4,
                'slug' => 'biotechnology',
                'name' => 'Biotechnology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Biotechnology',
                    'de' => 'Biotechnologie',
                    'es' => 'Biotecnología',
                    'pl' => 'Biotechnologia'
                ]),
                'scom' => 'Drug discovery, gene therapy, biopharmaceuticals, and life sciences research',
                'scom_translations' => json_encode([
                    'en' => 'Drug discovery, gene therapy, biopharmaceuticals, and life sciences research',
                    'de' => 'Medikamentenentwicklung, Gentherapie, Biopharmazeutika und Lebenswissenschaftsforschung',
                    'es' => 'Descubrimiento de fármacos, terapia génica, biofarmacéuticos e investigación en ciencias de la vida',
                    'pl' => 'Odkrywanie leków, terapia genowa, biofarmaceutyki i badania nauk o życiu'
                ])
            ],
            [
                'id' => 45,
                'parent_id' => 4,
                'slug' => 'mental-health',
                'name' => 'Mental Health',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mental Health',
                    'de' => 'Psychische Gesundheit',
                    'es' => 'Salud Mental',
                    'pl' => 'Zdrowie Psychiczne'
                ]),
                'scom' => 'Mental health platforms, therapy apps, and psychological wellness solutions',
                'scom_translations' => json_encode([
                    'en' => 'Mental health platforms, therapy apps, and psychological wellness solutions',
                    'de' => 'Plattformen für psychische Gesundheit, Therapie-Apps und psychologische Wellness-Lösungen',
                    'es' => 'Plataformas de salud mental, aplicaciones de terapia y soluciones de bienestar psicológico',
                    'pl' => 'Platformy zdrowia psychicznego, aplikacje terapeutyczne i rozwiązania dobrostanu psychologicznego'
                ])
            ],
            [
                'id' => 46,
                'parent_id' => 4,
                'slug' => 'fitness-wellness',
                'name' => 'Fitness & Wellness',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fitness & Wellness',
                    'de' => 'Fitness & Wellness',
                    'es' => 'Fitness y Bienestar',
                    'pl' => 'Fitness i Wellness'
                ]),
                'scom' => 'Fitness tracking, wellness apps, wearable health technology, and lifestyle solutions',
                'scom_translations' => json_encode([
                    'en' => 'Fitness tracking, wellness apps, wearable health technology, and lifestyle solutions',
                    'de' => 'Fitness-Tracking, Wellness-Apps, tragbare Gesundheitstechnologie und Lifestyle-Lösungen',
                    'es' => 'Seguimiento de fitness, aplicaciones de bienestar, tecnología de salud portátil y soluciones de estilo de vida',
                    'pl' => 'Śledzenie fitness, aplikacje wellness, noszona technologia zdrowotna i rozwiązania stylu życia'
                ])
            ],
            [
                'id' => 47,
                'parent_id' => 4,
                'slug' => 'healthtech-software',
                'name' => 'HealthTech Software',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'HealthTech Software',
                    'de' => 'HealthTech-Software',
                    'es' => 'Software HealthTech',
                    'pl' => 'Oprogramowanie HealthTech'
                ]),
                'scom' => 'Healthcare management software, hospital systems, and clinical workflow solutions',
                'scom_translations' => json_encode([
                    'en' => 'Healthcare management software, hospital systems, and clinical workflow solutions',
                    'de' => 'Healthcare-Management-Software, Krankenhaus-Systeme und klinische Workflow-Lösungen',
                    'es' => 'Software de gestión sanitaria, sistemas hospitalarios y soluciones de flujo de trabajo clínico',
                    'pl' => 'Oprogramowanie zarządzania opieką zdrowotną, systemy szpitalne i rozwiązania przepływu pracy klinicznej'
                ])
            ],
            [
                'id' => 48,
                'parent_id' => 4,
                'slug' => 'other-healthcare',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Healthcare and biotech solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Healthcare and biotech solutions that do not fit into the main subcategories',
                    'de' => 'Healthcare- und Biotech-Lösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de salud y biotecnología que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania opieki zdrowotnej i biotechnologii, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 49,
                'parent_id' => 5, // Media & Entertainment
                'slug' => 'content-creation',
                'name' => 'Content Creation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Creation',
                    'de' => 'Content-Erstellung',
                    'es' => 'Creación de Contenido',
                    'pl' => 'Tworzenie Treści'
                ]),
                'scom' => 'Tools and platforms for creating, editing, and producing digital content',
                'scom_translations' => json_encode([
                    'en' => 'Tools and platforms for creating, editing, and producing digital content',
                    'de' => 'Tools und Plattformen zur Erstellung, Bearbeitung und Produktion digitaler Inhalte',
                    'es' => 'Herramientas y plataformas para crear, editar y producir contenido digital',
                    'pl' => 'Narzędzia i platformy do tworzenia, edytowania i produkcji treści cyfrowych'
                ])
            ],
            [
                'id' => 50,
                'parent_id' => 5,
                'slug' => 'gaming',
                'name' => 'Gaming',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Gaming',
                    'de' => 'Gaming',
                    'es' => 'Videojuegos',
                    'pl' => 'Gry'
                ]),
                'scom' => 'Video game development, gaming platforms, esports, and interactive entertainment',
                'scom_translations' => json_encode([
                    'en' => 'Video game development, gaming platforms, esports, and interactive entertainment',
                    'de' => 'Videospielentwicklung, Gaming-Plattformen, Esports und interaktive Unterhaltung',
                    'es' => 'Desarrollo de videojuegos, plataformas de gaming, esports y entretenimiento interactivo',
                    'pl' => 'Rozwój gier wideo, platformy gamingowe, esport i rozrywka interaktywna'
                ])
            ],
            [
                'id' => 51,
                'parent_id' => 5,
                'slug' => 'streaming-video',
                'name' => 'Streaming & Video',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Streaming & Video',
                    'de' => 'Streaming & Video',
                    'es' => 'Streaming y Video',
                    'pl' => 'Streaming i Wideo'
                ]),
                'scom' => 'Video streaming platforms, live streaming, and video-on-demand services',
                'scom_translations' => json_encode([
                    'en' => 'Video streaming platforms, live streaming, and video-on-demand services',
                    'de' => 'Video-Streaming-Plattformen, Live-Streaming und Video-on-Demand-Services',
                    'es' => 'Plataformas de streaming de video, transmisión en vivo y servicios de video bajo demanda',
                    'pl' => 'Platformy streamingu wideo, transmisje na żywo i usługi wideo na żądanie'
                ])
            ],
            [
                'id' => 52,
                'parent_id' => 5,
                'slug' => 'music-audio',
                'name' => 'Music & Audio',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Music & Audio',
                    'de' => 'Musik & Audio',
                    'es' => 'Música y Audio',
                    'pl' => 'Muzyka i Audio'
                ]),
                'scom' => 'Music streaming, audio production, podcasting, and sound technology platforms',
                'scom_translations' => json_encode([
                    'en' => 'Music streaming, audio production, podcasting, and sound technology platforms',
                    'de' => 'Musik-Streaming, Audio-Produktion, Podcasting und Soundtechnologie-Plattformen',
                    'es' => 'Streaming de música, producción de audio, podcasting y plataformas de tecnología de sonido',
                    'pl' => 'Streaming muzyki, produkcja audio, podcasty i platformy technologii dźwięku'
                ])
            ],
            [
                'id' => 53,
                'parent_id' => 5,
                'slug' => 'publishing-news',
                'name' => 'Publishing & News',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Publishing & News',
                    'de' => 'Verlagswesen & Nachrichten',
                    'es' => 'Publicación y Noticias',
                    'pl' => 'Wydawnictwo i Wiadomości'
                ]),
                'scom' => 'Digital publishing platforms, news distribution, and journalism technology',
                'scom_translations' => json_encode([
                    'en' => 'Digital publishing platforms, news distribution, and journalism technology',
                    'de' => 'Digitale Publishing-Plattformen, Nachrichtenverteilung und Journalismus-Technologie',
                    'es' => 'Plataformas de publicación digital, distribución de noticias y tecnología periodística',
                    'pl' => 'Platformy publikacji cyfrowych, dystrybucja wiadomości i technologia dziennikarstwa'
                ])
            ],
            [
                'id' => 54,
                'parent_id' => 5,
                'slug' => 'social-media',
                'name' => 'Social Media',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Media',
                    'de' => 'Social Media',
                    'es' => 'Redes Sociales',
                    'pl' => 'Media Społecznościowe'
                ]),
                'scom' => 'Social networking platforms, community building, and social interaction tools',
                'scom_translations' => json_encode([
                    'en' => 'Social networking platforms, community building, and social interaction tools',
                    'de' => 'Social-Networking-Plattformen, Community-Building und Tools für soziale Interaktion',
                    'es' => 'Plataformas de redes sociales, construcción de comunidades y herramientas de interacción social',
                    'pl' => 'Platformy społecznościowe, budowanie społeczności i narzędzia interakcji społecznych'
                ])
            ],
            [
                'id' => 55,
                'parent_id' => 5,
                'slug' => 'creator-economy',
                'name' => 'Creator Economy',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Creator Economy',
                    'de' => 'Creator Economy',
                    'es' => 'Economía de Creadores',
                    'pl' => 'Ekonomia Twórców'
                ]),
                'scom' => 'Monetization platforms for creators, influencer tools, and content creator services',
                'scom_translations' => json_encode([
                    'en' => 'Monetization platforms for creators, influencer tools, and content creator services',
                    'de' => 'Monetarisierungsplattformen für Kreative, Influencer-Tools und Content-Creator-Services',
                    'es' => 'Plataformas de monetización para creadores, herramientas de influencers y servicios para creadores de contenido',
                    'pl' => 'Platformy monetyzacji dla twórców, narzędzia influencerów i usługi dla twórców treści'
                ])
            ],
            [
                'id' => 56,
                'parent_id' => 5,
                'slug' => 'other-media',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Media and entertainment solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Media and entertainment solutions that do not fit into the main subcategories',
                    'de' => 'Medien- und Unterhaltungslösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de medios y entretenimiento que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania medialne i rozrywkowe, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 57,
                'parent_id' => 6, // Education & Learning
                'slug' => 'edtech',
                'name' => 'EdTech',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'EdTech',
                    'de' => 'EdTech',
                    'es' => 'EdTech',
                    'pl' => 'EdTech'
                ]),
                'scom' => 'Educational technology platforms, learning management systems, and digital classroom tools',
                'scom_translations' => json_encode([
                    'en' => 'Educational technology platforms, learning management systems, and digital classroom tools',
                    'de' => 'Bildungstechnologie-Plattformen, Lernmanagementsysteme und digitale Klassenzimmer-Tools',
                    'es' => 'Plataformas de tecnología educativa, sistemas de gestión del aprendizaje y herramientas de aula digital',
                    'pl' => 'Platformy technologii edukacyjnych, systemy zarządzania nauczaniem i narzędzia cyfrowych klas'
                ])
            ],
            [
                'id' => 58,
                'parent_id' => 6,
                'slug' => 'online-courses',
                'name' => 'Online Courses',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Courses',
                    'de' => 'Online-Kurse',
                    'es' => 'Cursos en Línea',
                    'pl' => 'Kursy Online'
                ]),
                'scom' => 'Online course platforms, MOOCs, and distance learning solutions',
                'scom_translations' => json_encode([
                    'en' => 'Online course platforms, MOOCs, and distance learning solutions',
                    'de' => 'Online-Kursplattformen, MOOCs und Fernlernen-Lösungen',
                    'es' => 'Plataformas de cursos en línea, MOOCs y soluciones de aprendizaje a distancia',
                    'pl' => 'Platformy kursów online, MOOCs i rozwiązania nauki zdalnej'
                ])
            ],
            [
                'id' => 59,
                'parent_id' => 6,
                'slug' => 'language-learning',
                'name' => 'Language Learning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Language Learning',
                    'de' => 'Sprachenlernen',
                    'es' => 'Aprendizaje de Idiomas',
                    'pl' => 'Nauka Języków'
                ]),
                'scom' => 'Language learning apps, translation tools, and multilingual education platforms',
                'scom_translations' => json_encode([
                    'en' => 'Language learning apps, translation tools, and multilingual education platforms',
                    'de' => 'Sprachlern-Apps, Übersetzungstools und mehrsprachige Bildungsplattformen',
                    'es' => 'Aplicaciones de aprendizaje de idiomas, herramientas de traducción y plataformas educativas multilingües',
                    'pl' => 'Aplikacje do nauki języków, narzędzia tłumaczeniowe i wielojęzyczne platformy edukacyjne'
                ])
            ],
            [
                'id' => 60,
                'parent_id' => 6,
                'slug' => 'corporate-training',
                'name' => 'Corporate Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Training',
                    'de' => 'Unternehmensschulung',
                    'es' => 'Capacitación Corporativa',
                    'pl' => 'Szkolenia Korporacyjne'
                ]),
                'scom' => 'Employee training platforms, professional development, and corporate learning solutions',
                'scom_translations' => json_encode([
                    'en' => 'Employee training platforms, professional development, and corporate learning solutions',
                    'de' => 'Mitarbeiterschulungsplattformen, berufliche Entwicklung und Unternehmenslern-Lösungen',
                    'es' => 'Plataformas de capacitación de empleados, desarrollo profesional y soluciones de aprendizaje corporativo',
                    'pl' => 'Platformy szkoleń pracowników, rozwój zawodowy i rozwiązania nauki korporacyjnej'
                ])
            ],
            [
                'id' => 61,
                'parent_id' => 6,
                'slug' => 'educational-games',
                'name' => 'Educational Games',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Educational Games',
                    'de' => 'Lernspiele',
                    'es' => 'Juegos Educativos',
                    'pl' => 'Gry Edukacyjne'
                ]),
                'scom' => 'Gamified learning platforms, educational games, and interactive learning experiences',
                'scom_translations' => json_encode([
                    'en' => 'Gamified learning platforms, educational games, and interactive learning experiences',
                    'de' => 'Gamifizierte Lernplattformen, Lernspiele und interaktive Lernerfahrungen',
                    'es' => 'Plataformas de aprendizaje gamificado, juegos educativos y experiencias de aprendizaje interactivo',
                    'pl' => 'Platformy uczenia się z grywalizacją, gry edukacyjne i interaktywne doświadczenia nauki'
                ])
            ],
            [
                'id' => 62,
                'parent_id' => 6,
                'slug' => 'skill-development',
                'name' => 'Skill Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Skill Development',
                    'de' => 'Kompetenzentwicklung',
                    'es' => 'Desarrollo de Habilidades',
                    'pl' => 'Rozwój Umiejętności'
                ]),
                'scom' => 'Professional skill training, certification programs, and career development platforms',
                'scom_translations' => json_encode([
                    'en' => 'Professional skill training, certification programs, and career development platforms',
                    'de' => 'Professionelle Kompetenzschulung, Zertifizierungsprogramme und Karriereentwicklungsplattformen',
                    'es' => 'Entrenamiento de habilidades profesionales, programas de certificación y plataformas de desarrollo profesional',
                    'pl' => 'Szkolenia umiejętności zawodowych, programy certyfikacyjne i platformy rozwoju kariery'
                ])
            ],
            [
                'id' => 63,
                'parent_id' => 6,
                'slug' => 'other-education',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Education and learning solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Education and learning solutions that do not fit into the main subcategories',
                    'de' => 'Bildungs- und Lernlösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de educación y aprendizaje que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania edukacyjne i uczenia się, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 64,
                'parent_id' => 7, // Transportation & Mobility
                'slug' => 'ride-sharing',
                'name' => 'Ride Sharing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Ride Sharing',
                    'de' => 'Mitfahrgelegenheiten',
                    'es' => 'Viajes Compartidos',
                    'pl' => 'Współdzielenie Przejazdów'
                ]),
                'scom' => 'Ride-hailing platforms, carpooling services, and shared mobility solutions',
                'scom_translations' => json_encode([
                    'en' => 'Ride-hailing platforms, carpooling services, and shared mobility solutions',
                    'de' => 'Fahrdienst-Plattformen, Fahrgemeinschaftsdienste und geteilte Mobilitätslösungen',
                    'es' => 'Plataformas de solicitud de viajes, servicios de carpooling y soluciones de movilidad compartida',
                    'pl' => 'Platformy zamawiania przejazdów, usługi carpoolingu i rozwiązania współdzielonej mobilności'
                ])
            ],
            [
                'id' => 65,
                'parent_id' => 7,
                'slug' => 'logistics-delivery',
                'name' => 'Logistics & Delivery',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Logistics & Delivery',
                    'de' => 'Logistik & Lieferung',
                    'es' => 'Logística y Entrega',
                    'pl' => 'Logistyka i Dostawa'
                ]),
                'scom' => 'Last-mile delivery, freight management, and supply chain logistics platforms',
                'scom_translations' => json_encode([
                    'en' => 'Last-mile delivery, freight management, and supply chain logistics platforms',
                    'de' => 'Letzte-Meile-Lieferung, Frachtmanagement und Supply-Chain-Logistikplattformen',
                    'es' => 'Entrega de última milla, gestión de carga y plataformas de logística de cadena de suministro',
                    'pl' => 'Dostawa ostatniej mili, zarządzanie transportem towarowym i platformy logistyki łańcucha dostaw'
                ])
            ],
            [
                'id' => 66,
                'parent_id' => 7,
                'slug' => 'autonomous-vehicles',
                'name' => 'Autonomous Vehicles',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Autonomous Vehicles',
                    'de' => 'Autonome Fahrzeuge',
                    'es' => 'Vehículos Autónomos',
                    'pl' => 'Pojazdy Autonomiczne'
                ]),
                'scom' => 'Self-driving car technology, autonomous vehicle software, and driverless transportation',
                'scom_translations' => json_encode([
                    'en' => 'Self-driving car technology, autonomous vehicle software, and driverless transportation',
                    'de' => 'Selbstfahrende Auto-Technologie, autonome Fahrzeug-Software und fahrerloser Transport',
                    'es' => 'Tecnología de autos autónomos, software de vehículos autónomos y transporte sin conductor',
                    'pl' => 'Technologia samochodów autonomicznych, oprogramowanie pojazdów autonomicznych i transport bez kierowcy'
                ])
            ],
            [
                'id' => 67,
                'parent_id' => 7,
                'slug' => 'micro-mobility',
                'name' => 'Micro-mobility',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Micro-mobility',
                    'de' => 'Mikromobilität',
                    'es' => 'Micromovilidad',
                    'pl' => 'Mikromobilność'
                ]),
                'scom' => 'E-scooters, bike sharing, electric bikes, and short-distance transportation solutions',
                'scom_translations' => json_encode([
                    'en' => 'E-scooters, bike sharing, electric bikes, and short-distance transportation solutions',
                    'de' => 'E-Scooter, Bike-Sharing, Elektrofahrräder und Kurzdistanz-Transportlösungen',
                    'es' => 'E-scooters, bicicletas compartidas, bicicletas eléctricas y soluciones de transporte de corta distancia',
                    'pl' => 'E-hulajnogi, współdzielenie rowerów, rowery elektryczne i rozwiązania transportu krótkodystansowego'
                ])
            ],
            [
                'id' => 68,
                'parent_id' => 7,
                'slug' => 'fleet-management',
                'name' => 'Fleet Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fleet Management',
                    'de' => 'Flottenmanagement',
                    'es' => 'Gestión de Flotas',
                    'pl' => 'Zarządzanie Flotą'
                ]),
                'scom' => 'Vehicle tracking, fleet optimization, and commercial transportation management systems',
                'scom_translations' => json_encode([
                    'en' => 'Vehicle tracking, fleet optimization, and commercial transportation management systems',
                    'de' => 'Fahrzeugverfolgung, Flottenoptimierung und kommerzielle Transportmanagementsysteme',
                    'es' => 'Seguimiento de vehículos, optimización de flotas y sistemas de gestión de transporte comercial',
                    'pl' => 'Śledzenie pojazdów, optymalizacja floty i systemy zarządzania transportem komercyjnym'
                ])
            ],
            [
                'id' => 69,
                'parent_id' => 7,
                'slug' => 'travel-tourism',
                'name' => 'Travel & Tourism',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel & Tourism',
                    'de' => 'Reisen & Tourismus',
                    'es' => 'Viajes y Turismo',
                    'pl' => 'Podróże i Turystyka'
                ]),
                'scom' => 'Travel booking platforms, tourism services, and hospitality technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'Travel booking platforms, tourism services, and hospitality technology solutions',
                    'de' => 'Reisebuchungsplattformen, Tourismusdienstleistungen und Gastgewerbe-Technologielösungen',
                    'es' => 'Plataformas de reserva de viajes, servicios de turismo y soluciones tecnológicas de hospitalidad',
                    'pl' => 'Platformy rezerwacji podróży, usługi turystyczne i rozwiązania technologiczne hotelarstwa'
                ])
            ],
            [
                'id' => 70,
                'parent_id' => 7,
                'slug' => 'other-transportation',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Transportation and mobility solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Transportation and mobility solutions that do not fit into the main subcategories',
                    'de' => 'Transport- und Mobilitätslösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de transporte y movilidad que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania transportowe i mobilności, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 71,
                'parent_id' => 8, // Real Estate & PropTech
                'slug' => 'property-management',
                'name' => 'Property Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Property Management',
                    'de' => 'Immobilienverwaltung',
                    'es' => 'Gestión de Propiedades',
                    'pl' => 'Zarządzanie Nieruchomościami'
                ]),
                'scom' => 'Property management software, tenant services, and real estate portfolio management',
                'scom_translations' => json_encode([
                    'en' => 'Property management software, tenant services, and real estate portfolio management',
                    'de' => 'Immobilienverwaltungs-Software, Mieterservices und Immobilienportfolio-Management',
                    'es' => 'Software de gestión de propiedades, servicios para inquilinos y gestión de carteras inmobiliarias',
                    'pl' => 'Oprogramowanie zarządzania nieruchomościami, usługi najemców i zarządzanie portfelem nieruchomości'
                ])
            ],
            [
                'id' => 72,
                'parent_id' => 8,
                'slug' => 'real-estate-platforms',
                'name' => 'Real Estate Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Platforms',
                    'de' => 'Immobilienplattformen',
                    'es' => 'Plataformas Inmobiliarias',
                    'pl' => 'Platformy Nieruchomości'
                ]),
                'scom' => 'Online real estate marketplaces, property search platforms, and listing services',
                'scom_translations' => json_encode([
                    'en' => 'Online real estate marketplaces, property search platforms, and listing services',
                    'de' => 'Online-Immobilien-Marktplätze, Immobiliensuchplattformen und Inseratsdienste',
                    'es' => 'Marketplaces inmobiliarios en línea, plataformas de búsqueda de propiedades y servicios de listado',
                    'pl' => 'Internetowe rynki nieruchomości, platformy wyszukiwania nieruchomości i usługi ogłoszeń'
                ])
            ],
            [
                'id' => 73,
                'parent_id' => 8,
                'slug' => 'construction-technology',
                'name' => 'Construction Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Construction Technology',
                    'de' => 'Bautechnologie',
                    'es' => 'Tecnología de Construcción',
                    'pl' => 'Technologia Budowlana'
                ]),
                'scom' => 'Construction management software, building automation, and construction workflow solutions',
                'scom_translations' => json_encode([
                    'en' => 'Construction management software, building automation, and construction workflow solutions',
                    'de' => 'Baumanagement-Software, Gebäudeautomation und Bauprozess-Lösungen',
                    'es' => 'Software de gestión de construcción, automatización de edificios y soluciones de flujo de trabajo de construcción',
                    'pl' => 'Oprogramowanie zarządzania budową, automatyka budynków i rozwiązania przepływu pracy budowlanej'
                ])
            ],
            [
                'id' => 74,
                'parent_id' => 8,
                'slug' => 'smart-buildings',
                'name' => 'Smart Buildings',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Smart Buildings',
                    'de' => 'Intelligente Gebäude',
                    'es' => 'Edificios Inteligentes',
                    'pl' => 'Inteligentne Budynki'
                ]),
                'scom' => 'IoT building systems, smart home technology, and building energy management',
                'scom_translations' => json_encode([
                    'en' => 'IoT building systems, smart home technology, and building energy management',
                    'de' => 'IoT-Gebäudesysteme, Smart-Home-Technologie und Gebäude-Energiemanagement',
                    'es' => 'Sistemas IoT para edificios, tecnología de hogar inteligente y gestión energética de edificios',
                    'pl' => 'Systemy IoT w budynkach, technologia inteligentnego domu i zarządzanie energią budynków'
                ])
            ],
            [
                'id' => 75,
                'parent_id' => 8,
                'slug' => 'short-term-rentals',
                'name' => 'Short-term Rentals',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Short-term Rentals',
                    'de' => 'Kurzzeitvermietung',
                    'es' => 'Alquileres a Corto Plazo',
                    'pl' => 'Wynajem Krótkoterminowy'
                ]),
                'scom' => 'Vacation rental platforms, short-stay accommodation, and hospitality management tools',
                'scom_translations' => json_encode([
                    'en' => 'Vacation rental platforms, short-stay accommodation, and hospitality management tools',
                    'de' => 'Ferienwohnungsplattformen, Kurzzeitunterkünfte und Hospitality-Management-Tools',
                    'es' => 'Plataformas de alquiler vacacional, alojamiento de corta estancia y herramientas de gestión hotelera',
                    'pl' => 'Platformy wynajmu wakacyjnego, zakwaterowanie krótkoterminowe i narzędzia zarządzania hotelarstwem'
                ])
            ],
            [
                'id' => 76,
                'parent_id' => 8,
                'slug' => 'other-proptech',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Real estate and property technology solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Real estate and property technology solutions that do not fit into the main subcategories',
                    'de' => 'Immobilien- und PropTech-Lösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de bienes raíces y tecnología inmobiliaria que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania nieruchomości i technologii nieruchomości, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 77,
                'parent_id' => 9, // Food & Agriculture
                'slug' => 'food-delivery',
                'name' => 'Food Delivery',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Delivery',
                    'de' => 'Lebensmittellieferung',
                    'es' => 'Entrega de Comida',
                    'pl' => 'Dostawa Jedzenia'
                ]),
                'scom' => 'Food delivery platforms, meal delivery services, and on-demand food ordering',
                'scom_translations' => json_encode([
                    'en' => 'Food delivery platforms, meal delivery services, and on-demand food ordering',
                    'de' => 'Lebensmittellieferungsplattformen, Mahlzeitlieferdienste und On-Demand-Essensbestellung',
                    'es' => 'Plataformas de entrega de comida, servicios de entrega de comidas y pedidos de comida bajo demanda',
                    'pl' => 'Platformy dostawy żywności, usługi dostawy posiłków i zamawianie jedzenia na żądanie'
                ])
            ],
            [
                'id' => 78,
                'parent_id' => 9,
                'slug' => 'restaurant-technology',
                'name' => 'Restaurant Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Restaurant Technology',
                    'de' => 'Restaurant-Technologie',
                    'es' => 'Tecnología de Restaurantes',
                    'pl' => 'Technologia Restauracyjna'
                ]),
                'scom' => 'POS systems, restaurant management software, and hospitality technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'POS systems, restaurant management software, and hospitality technology solutions',
                    'de' => 'POS-Systeme, Restaurant-Management-Software und Hospitality-Technologie-Lösungen',
                    'es' => 'Sistemas POS, software de gestión de restaurantes y soluciones tecnológicas de hospitalidad',
                    'pl' => 'Systemy POS, oprogramowanie zarządzania restauracją i rozwiązania technologiczne gastronomii'
                ])
            ],
            [
                'id' => 79,
                'parent_id' => 9,
                'slug' => 'agtech',
                'name' => 'AgTech',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'AgTech',
                    'de' => 'AgTech',
                    'es' => 'AgTech',
                    'pl' => 'AgTech'
                ]),
                'scom' => 'Agricultural technology, precision farming, crop monitoring, and smart agriculture solutions',
                'scom_translations' => json_encode([
                    'en' => 'Agricultural technology, precision farming, crop monitoring, and smart agriculture solutions',
                    'de' => 'Landwirtschaftstechnologie, Präzisionslandwirtschaft, Ernteüberwachung und Smart-Agriculture-Lösungen',
                    'es' => 'Tecnología agrícola, agricultura de precisión, monitoreo de cultivos y soluciones de agricultura inteligente',
                    'pl' => 'Technologia rolnicza, rolnictwo precyzyjne, monitorowanie upraw i rozwiązania inteligentnego rolnictwa'
                ])
            ],
            [
                'id' => 80,
                'parent_id' => 9,
                'slug' => 'food-production',
                'name' => 'Food Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Production',
                    'de' => 'Lebensmittelproduktion',
                    'es' => 'Producción de Alimentos',
                    'pl' => 'Produkcja Żywności'
                ]),
                'scom' => 'Food manufacturing technology, alternative proteins, and sustainable food production',
                'scom_translations' => json_encode([
                    'en' => 'Food manufacturing technology, alternative proteins, and sustainable food production',
                    'de' => 'Lebensmittelproduktions-Technologie, alternative Proteine und nachhaltige Lebensmittelproduktion',
                    'es' => 'Tecnología de fabricación de alimentos, proteínas alternativas y producción sostenible de alimentos',
                    'pl' => 'Technologia produkcji żywności, alternatywne białka i zrównoważona produkcja żywności'
                ])
            ],
            [
                'id' => 81,
                'parent_id' => 9,
                'slug' => 'nutrition-diet',
                'name' => 'Nutrition & Diet',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Nutrition & Diet',
                    'de' => 'Ernährung & Diät',
                    'es' => 'Nutrición y Dieta',
                    'pl' => 'Żywienie i Dieta'
                ]),
                'scom' => 'Nutrition tracking apps, diet planning platforms, and personalized nutrition solutions',
                'scom_translations' => json_encode([
                    'en' => 'Nutrition tracking apps, diet planning platforms, and personalized nutrition solutions',
                    'de' => 'Ernährungs-Tracking-Apps, Diätplanungsplattformen und personalisierte Ernährungslösungen',
                    'es' => 'Aplicaciones de seguimiento nutricional, plataformas de planificación dietética y soluciones de nutrición personalizada',
                    'pl' => 'Aplikacje śledzenia żywienia, platformy planowania diety i spersonalizowane rozwiązania żywieniowe'
                ])
            ],
            [
                'id' => 82,
                'parent_id' => 9,
                'slug' => 'ghost-kitchens',
                'name' => 'Ghost Kitchens',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Ghost Kitchens',
                    'de' => 'Ghost Kitchens',
                    'es' => 'Cocinas Fantasma',
                    'pl' => 'Kuchnie Duchów'
                ]),
                'scom' => 'Virtual restaurants, cloud kitchens, and delivery-only food service models',
                'scom_translations' => json_encode([
                    'en' => 'Virtual restaurants, cloud kitchens, and delivery-only food service models',
                    'de' => 'Virtuelle Restaurants, Cloud-Küchen und reine Lieferservice-Modelle',
                    'es' => 'Restaurantes virtuales, cocinas en la nube y modelos de servicio de comida solo para entrega',
                    'pl' => 'Wirtualne restauracje, kuchnie w chmurze i modele usług gastronomicznych tylko z dostawą'
                ])
            ],
            [
                'id' => 83,
                'parent_id' => 9,
                'slug' => 'other-food',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Food and agriculture solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Food and agriculture solutions that do not fit into the main subcategories',
                    'de' => 'Lebensmittel- und Landwirtschaftslösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de alimentos y agricultura que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania żywnościowe i rolnicze, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 84,
                'parent_id' => 10, // Energy & Environment
                'slug' => 'clean-energy',
                'name' => 'Clean Energy',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Clean Energy',
                    'de' => 'Saubere Energie',
                    'es' => 'Energía Limpia',
                    'pl' => 'Czysta Energia'
                ]),
                'scom' => 'Solar, wind, hydro, and other renewable energy generation technologies',
                'scom_translations' => json_encode([
                    'en' => 'Solar, wind, hydro, and other renewable energy generation technologies',
                    'de' => 'Solar-, Wind-, Wasser- und andere erneuerbare Energieerzeugungstechnologien',
                    'es' => 'Tecnologías de generación de energía solar, eólica, hidráulica y otras renovables',
                    'pl' => 'Technologie wytwarzania energii słonecznej, wiatrowej, wodnej i innych odnawialnych'
                ])
            ],
            [
                'id' => 85,
                'parent_id' => 10,
                'slug' => 'energy-storage',
                'name' => 'Energy Storage',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Energy Storage',
                    'de' => 'Energiespeicherung',
                    'es' => 'Almacenamiento de Energía',
                    'pl' => 'Magazynowanie Energii'
                ]),
                'scom' => 'Battery technology, grid storage solutions, and energy storage systems',
                'scom_translations' => json_encode([
                    'en' => 'Battery technology, grid storage solutions, and energy storage systems',
                    'de' => 'Batterietechnologie, Netzspeicherlösungen und Energiespeichersysteme',
                    'es' => 'Tecnología de baterías, soluciones de almacenamiento en red y sistemas de almacenamiento de energía',
                    'pl' => 'Technologia baterii, rozwiązania magazynowania sieciowego i systemy magazynowania energii'
                ])
            ],
            [
                'id' => 86,
                'parent_id' => 10,
                'slug' => 'carbon-management',
                'name' => 'Carbon Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Carbon Management',
                    'de' => 'Kohlenstoffmanagement',
                    'es' => 'Gestión de Carbono',
                    'pl' => 'Zarządzanie Węglem'
                ]),
                'scom' => 'Carbon capture, carbon trading, emissions tracking, and climate solutions',
                'scom_translations' => json_encode([
                    'en' => 'Carbon capture, carbon trading, emissions tracking, and climate solutions',
                    'de' => 'Kohlenstoffabscheidung, Kohlenstoffhandel, Emissionsverfolgung und Klimalösungen',
                    'es' => 'Captura de carbono, comercio de carbono, seguimiento de emisiones y soluciones climáticas',
                    'pl' => 'Wychwytywanie węgla, handel węglem, śledzenie emisji i rozwiązania klimatyczne'
                ])
            ],
            [
                'id' => 87,
                'parent_id' => 10,
                'slug' => 'waste-management',
                'name' => 'Waste Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Waste Management',
                    'de' => 'Abfallwirtschaft',
                    'es' => 'Gestión de Residuos',
                    'pl' => 'Zarządzanie Odpadami'
                ]),
                'scom' => 'Waste reduction, recycling technology, circular economy, and waste-to-energy solutions',
                'scom_translations' => json_encode([
                    'en' => 'Waste reduction, recycling technology, circular economy, and waste-to-energy solutions',
                    'de' => 'Abfallreduzierung, Recycling-Technologie, Kreislaufwirtschaft und Waste-to-Energy-Lösungen',
                    'es' => 'Reducción de residuos, tecnología de reciclaje, economía circular y soluciones de residuos a energía',
                    'pl' => 'Redukcja odpadów, technologia recyklingu, gospodarka cyrkularna i rozwiązania odpadów na energię'
                ])
            ],
            [
                'id' => 88,
                'parent_id' => 10,
                'slug' => 'water-technology',
                'name' => 'Water Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Water Technology',
                    'de' => 'Wassertechnologie',
                    'es' => 'Tecnología del Agua',
                    'pl' => 'Technologia Wodna'
                ]),
                'scom' => 'Water purification, desalination, water management, and conservation technologies',
                'scom_translations' => json_encode([
                    'en' => 'Water purification, desalination, water management, and conservation technologies',
                    'de' => 'Wasserreinigung, Entsalzung, Wassermanagement und Konservierungstechnologien',
                    'es' => 'Purificación de agua, desalinización, gestión del agua y tecnologías de conservación',
                    'pl' => 'Oczyszczanie wody, odsalanie, zarządzanie wodą i technologie konserwacji'
                ])
            ],
            [
                'id' => 89,
                'parent_id' => 10,
                'slug' => 'sustainability',
                'name' => 'Sustainability',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sustainability',
                    'de' => 'Nachhaltigkeit',
                    'es' => 'Sostenibilidad',
                    'pl' => 'Zrównoważoność'
                ]),
                'scom' => 'ESG tracking, sustainability reporting, green building, and environmental monitoring',
                'scom_translations' => json_encode([
                    'en' => 'ESG tracking, sustainability reporting, green building, and environmental monitoring',
                    'de' => 'ESG-Tracking, Nachhaltigkeits-Reporting, grünes Bauen und Umweltmonitoring',
                    'es' => 'Seguimiento ESG, informes de sostenibilidad, construcción verde y monitoreo ambiental',
                    'pl' => 'Śledzenie ESG, raportowanie zrównoważoności, zielone budownictwo i monitoring środowiskowy'
                ])
            ],
            [
                'id' => 90,
                'parent_id' => 10,
                'slug' => 'other-energy',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Energy and environment solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Energy and environment solutions that do not fit into the main subcategories',
                    'de' => 'Energie- und Umweltlösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de energía y medio ambiente que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania energetyczne i środowiskowe, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 91,
                'parent_id' => 11, // Human Resources & Workforce
                'slug' => 'recruitment-hiring',
                'name' => 'Recruitment & Hiring',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Recruitment & Hiring',
                    'de' => 'Rekrutierung & Einstellung',
                    'es' => 'Reclutamiento y Contratación',
                    'pl' => 'Rekrutacja i Zatrudnianie'
                ]),
                'scom' => 'Applicant tracking systems, job boards, recruitment platforms, and hiring tools',
                'scom_translations' => json_encode([
                    'en' => 'Applicant tracking systems, job boards, recruitment platforms, and hiring tools',
                    'de' => 'Bewerberverfolgungssysteme, Jobbörsen, Rekrutierungsplattformen und Einstellungstools',
                    'es' => 'Sistemas de seguimiento de candidatos, bolsas de trabajo, plataformas de reclutamiento y herramientas de contratación',
                    'pl' => 'Systemy śledzenia kandydatów, portale pracy, platformy rekrutacyjne i narzędzia zatrudniania'
                ])
            ],
            [
                'id' => 92,
                'parent_id' => 11,
                'slug' => 'hr-management',
                'name' => 'HR Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'HR Management',
                    'de' => 'HR-Management',
                    'es' => 'Gestión de Recursos Humanos',
                    'pl' => 'Zarządzanie HR'
                ]),
                'scom' => 'HRIS systems, payroll management, employee lifecycle, and HR automation tools',
                'scom_translations' => json_encode([
                    'en' => 'HRIS systems, payroll management, employee lifecycle, and HR automation tools',
                    'de' => 'HRIS-Systeme, Gehaltsabrechnung, Mitarbeiter-Lebenszyklus und HR-Automatisierungstools',
                    'es' => 'Sistemas HRIS, gestión de nóminas, ciclo de vida del empleado y herramientas de automatización de RR.HH.',
                    'pl' => 'Systemy HRIS, zarządzanie płacami, cykl życia pracownika i narzędzia automatyzacji HR'
                ])
            ],
            [
                'id' => 93,
                'parent_id' => 11,
                'slug' => 'freelance-platforms',
                'name' => 'Freelance Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Freelance Platforms',
                    'de' => 'Freelancer-Plattformen',
                    'es' => 'Plataformas de Freelance',
                    'pl' => 'Platformy Freelancerskie'
                ]),
                'scom' => 'Gig economy platforms, freelancer marketplaces, and independent contractor management',
                'scom_translations' => json_encode([
                    'en' => 'Gig economy platforms, freelancer marketplaces, and independent contractor management',
                    'de' => 'Gig-Economy-Plattformen, Freelancer-Marktplätze und Independent-Contractor-Management',
                    'es' => 'Plataformas de economía gig, marketplaces de freelancers y gestión de contratistas independientes',
                    'pl' => 'Platformy gig economy, rynki freelancerów i zarządzanie niezależnymi wykonawcami'
                ])
            ],
            [
                'id' => 94,
                'parent_id' => 11,
                'slug' => 'remote-work-tools',
                'name' => 'Remote Work Tools',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Remote Work Tools',
                    'de' => 'Remote-Work-Tools',
                    'es' => 'Herramientas de Trabajo Remoto',
                    'pl' => 'Narzędzia Pracy Zdalnej'
                ]),
                'scom' => 'Virtual collaboration tools, remote team management, and distributed workforce solutions',
                'scom_translations' => json_encode([
                    'en' => 'Virtual collaboration tools, remote team management, and distributed workforce solutions',
                    'de' => 'Virtuelle Kollaborationstools, Remote-Team-Management und verteilte Workforce-Lösungen',
                    'es' => 'Herramientas de colaboración virtual, gestión de equipos remotos y soluciones de fuerza laboral distribuida',
                    'pl' => 'Narzędzia wirtualnej współpracy, zarządzanie zespołami zdalnymi i rozwiązania rozproszonej siły roboczej'
                ])
            ],
            [
                'id' => 95,
                'parent_id' => 11,
                'slug' => 'employee-benefits',
                'name' => 'Employee Benefits',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Employee Benefits',
                    'de' => 'Mitarbeitervorteile',
                    'es' => 'Beneficios para Empleados',
                    'pl' => 'Świadczenia Pracownicze'
                ]),
                'scom' => 'Benefits administration, wellness programs, and employee perks platforms',
                'scom_translations' => json_encode([
                    'en' => 'Benefits administration, wellness programs, and employee perks platforms',
                    'de' => 'Benefits-Administration, Wellness-Programme und Mitarbeiter-Perks-Plattformen',
                    'es' => 'Administración de beneficios, programas de bienestar y plataformas de ventajas para empleados',
                    'pl' => 'Administracja świadczeń, programy wellness i platformy korzyści pracowniczych'
                ])
            ],
            [
                'id' => 96,
                'parent_id' => 11,
                'slug' => 'workforce-analytics',
                'name' => 'Workforce Analytics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Workforce Analytics',
                    'de' => 'Workforce Analytics',
                    'es' => 'Analítica de Fuerza Laboral',
                    'pl' => 'Analityka Siły Roboczej'
                ]),
                'scom' => 'People analytics, performance tracking, workforce planning, and HR data insights',
                'scom_translations' => json_encode([
                    'en' => 'People analytics, performance tracking, workforce planning, and HR data insights',
                    'de' => 'People Analytics, Performance-Tracking, Workforce-Planung und HR-Dateneinblicke',
                    'es' => 'Analítica de personas, seguimiento de rendimiento, planificación de fuerza laboral y conocimientos de datos de RR.HH.',
                    'pl' => 'Analityka ludzi, śledzenie wydajności, planowanie siły roboczej i wgląd w dane HR'
                ])
            ],
            [
                'id' => 97,
                'parent_id' => 11,
                'slug' => 'other-hr',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Human resources and workforce solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Human resources and workforce solutions that do not fit into the main subcategories',
                    'de' => 'Personalwesen- und Workforce-Lösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de recursos humanos y fuerza laboral que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania zasobów ludzkich i siły roboczej, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 98,
                'parent_id' => 12, // Business Services
                'slug' => 'marketing-technology',
                'name' => 'Marketing Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing Technology',
                    'de' => 'Marketing-Technologie',
                    'es' => 'Tecnología de Marketing',
                    'pl' => 'Technologia Marketingowa'
                ]),
                'scom' => 'MarTech platforms, digital marketing tools, automation, and customer acquisition solutions',
                'scom_translations' => json_encode([
                    'en' => 'MarTech platforms, digital marketing tools, automation, and customer acquisition solutions',
                    'de' => 'MarTech-Plattformen, digitale Marketing-Tools, Automatisierung und Kundengewinnungslösungen',
                    'es' => 'Plataformas MarTech, herramientas de marketing digital, automatización y soluciones de adquisición de clientes',
                    'pl' => 'Platformy MarTech, narzędzia marketingu cyfrowego, automatyzacja i rozwiązania pozyskiwania klientów'
                ])
            ],
            [
                'id' => 99,
                'parent_id' => 12,
                'slug' => 'sales-tools',
                'name' => 'Sales Tools',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales Tools',
                    'de' => 'Verkaufstools',
                    'es' => 'Herramientas de Ventas',
                    'pl' => 'Narzędzia Sprzedażowe'
                ]),
                'scom' => 'CRM systems, sales automation, lead generation, and sales enablement platforms',
                'scom_translations' => json_encode([
                    'en' => 'CRM systems, sales automation, lead generation, and sales enablement platforms',
                    'de' => 'CRM-Systeme, Verkaufsautomatisierung, Lead-Generierung und Sales-Enablement-Plattformen',
                    'es' => 'Sistemas CRM, automatización de ventas, generación de leads y plataformas de habilitación de ventas',
                    'pl' => 'Systemy CRM, automatyzacja sprzedaży, generowanie leadów i platformy wspomagania sprzedaży'
                ])
            ],
            [
                'id' => 100,
                'parent_id' => 12,
                'slug' => 'analytics-data',
                'name' => 'Analytics & Data',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Analytics & Data',
                    'de' => 'Analytics & Daten',
                    'es' => 'Analítica y Datos',
                    'pl' => 'Analityka i Dane'
                ]),
                'scom' => 'Business intelligence, data analytics, reporting tools, and data visualization platforms',
                'scom_translations' => json_encode([
                    'en' => 'Business intelligence, data analytics, reporting tools, and data visualization platforms',
                    'de' => 'Business Intelligence, Datenanalyse, Reporting-Tools und Datenvisualisierungsplattformen',
                    'es' => 'Inteligencia de negocios, analítica de datos, herramientas de informes y plataformas de visualización de datos',
                    'pl' => 'Business intelligence, analityka danych, narzędzia raportowania i platformy wizualizacji danych'
                ])
            ],
            [
                'id' => 101,
                'parent_id' => 12,
                'slug' => 'legal-technology',
                'name' => 'Legal Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Legal Technology',
                    'de' => 'Rechtstechnologie',
                    'es' => 'Tecnología Legal',
                    'pl' => 'Technologia Prawna'
                ]),
                'scom' => 'LegalTech solutions, contract management, compliance tools, and legal automation',
                'scom_translations' => json_encode([
                    'en' => 'LegalTech solutions, contract management, compliance tools, and legal automation',
                    'de' => 'LegalTech-Lösungen, Vertragsmanagement, Compliance-Tools und Rechtsautomatisierung',
                    'es' => 'Soluciones LegalTech, gestión de contratos, herramientas de cumplimiento y automatización legal',
                    'pl' => 'Rozwiązania LegalTech, zarządzanie umowami, narzędzia compliance i automatyzacja prawna'
                ])
            ],
            [
                'id' => 102,
                'parent_id' => 12,
                'slug' => 'accounting-finance',
                'name' => 'Accounting & Finance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Accounting & Finance',
                    'de' => 'Buchhaltung & Finanzen',
                    'es' => 'Contabilidad y Finanzas',
                    'pl' => 'Księgowość i Finanse'
                ]),
                'scom' => 'Accounting software, financial management, expense tracking, and bookkeeping solutions',
                'scom_translations' => json_encode([
                    'en' => 'Accounting software, financial management, expense tracking, and bookkeeping solutions',
                    'de' => 'Buchhaltungssoftware, Finanzmanagement, Ausgabenverfolgung und Buchführungslösungen',
                    'es' => 'Software de contabilidad, gestión financiera, seguimiento de gastos y soluciones de teneduría de libros',
                    'pl' => 'Oprogramowanie księgowe, zarządzanie finansami, śledzenie wydatków i rozwiązania księgowości'
                ])
            ],
            [
                'id' => 103,
                'parent_id' => 12,
                'slug' => 'project-management',
                'name' => 'Project Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Project Management',
                    'de' => 'Projektmanagement',
                    'es' => 'Gestión de Proyectos',
                    'pl' => 'Zarządzanie Projektami'
                ]),
                'scom' => 'Project management tools, task tracking, team collaboration, and workflow management',
                'scom_translations' => json_encode([
                    'en' => 'Project management tools, task tracking, team collaboration, and workflow management',
                    'de' => 'Projektmanagement-Tools, Aufgabenverfolgung, Teamzusammenarbeit und Workflow-Management',
                    'es' => 'Herramientas de gestión de proyectos, seguimiento de tareas, colaboración en equipo y gestión de flujo de trabajo',
                    'pl' => 'Narzędzia zarządzania projektami, śledzenie zadań, współpraca zespołowa i zarządzanie przepływem pracy'
                ])
            ],
            [
                'id' => 104,
                'parent_id' => 12,
                'slug' => 'customer-service',
                'name' => 'Customer Service',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Service',
                    'de' => 'Kundenservice',
                    'es' => 'Servicio al Cliente',
                    'pl' => 'Obsługa Klienta'
                ]),
                'scom' => 'Help desk software, customer support tools, chatbots, and customer experience platforms',
                'scom_translations' => json_encode([
                    'en' => 'Help desk software, customer support tools, chatbots, and customer experience platforms',
                    'de' => 'Help-Desk-Software, Kundensupport-Tools, Chatbots und Customer-Experience-Plattformen',
                    'es' => 'Software de help desk, herramientas de soporte al cliente, chatbots y plataformas de experiencia del cliente',
                    'pl' => 'Oprogramowanie help desk, narzędzia wsparcia klienta, chatboty i platformy doświadczeń klienta'
                ])
            ],
            [
                'id' => 105,
                'parent_id' => 12,
                'slug' => 'other-business',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Business services solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Business services solutions that do not fit into the main subcategories',
                    'de' => 'Geschäftsservice-Lösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de servicios empresariales que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania usług biznesowych, które nie pasują do głównych podkategorii'
                ])
            ],
            [
                'id' => 106,
                'parent_id' => 13,
                'slug' => 'other-startups',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Business services solutions that do not fit into the main subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Business services solutions that do not fit into the main subcategories',
                    'de' => 'Geschäftsservice-Lösungen, die nicht in die Hauptunterkategorien passen',
                    'es' => 'Soluciones de servicios empresariales que no encajan en las subcategorías principales',
                    'pl' => 'Rozwiązania usług biznesowych, które nie pasują do głównych podkategorii'
                ])
            ]
        ];
        // Disable foreign key checks temporarily
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table
        DB::table('startup_categories')->truncate();
        // Re-enable foreign key checks
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Insert categories
        foreach ($categories as $category) {
            DB::table('startup_categories')->insert([
                'id' => $category['id'],
                'parent_id' => $category['parent_id'],
                'slug' => $category['slug'],
                'name' => $category['name'],
                'name_translations' => $category['name_translations'],
                'scom' => $category['scom'],
                'scom_translations' => $category['scom_translations'],
                'ord' => $category['ord'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
