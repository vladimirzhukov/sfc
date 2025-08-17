<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessCategories extends Seeder
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
                'slug' => 'consulting-advisory-services',
                'name' => 'Consulting & Advisory Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Consulting & Advisory Services',
                    'de' => 'Beratungs- und Advisory-Dienstleistungen',
                    'es' => 'Servicios de Consultoría y Asesoría',
                    'pl' => 'Usługi Doradcze i Konsultingowe'
                ]),
                'scom' => 'Advisory and consulting services businesses',
                'scom_translations' => json_encode([
                    'en' => 'Advisory and consulting services businesses',
                    'de' => 'Beratungs- und Advisory-Dienstleistungsunternehmen',
                    'es' => 'Empresas de servicios de asesoría y consultoría',
                    'pl' => 'Firmy świadczące usługi doradcze i konsultingowe'
                ])
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'slug' => 'professional-services',
                'name' => 'Professional Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Professional Services',
                    'de' => 'Professionelle Dienstleistungen',
                    'es' => 'Servicios Profesionales',
                    'pl' => 'Usługi Profesjonalne'
                ]),
                'scom' => 'Professional services businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Professional services businesses and firms',
                    'de' => 'Professionelle Dienstleistungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de servicios profesionales',
                    'pl' => 'Firmy i przedsiębiorstwa świadczące usługi profesjonalne'
                ])
            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'slug' => 'creative-design-services',
                'name' => 'Creative & Design Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Creative & Design Services',
                    'de' => 'Kreativ- und Design-Dienstleistungen',
                    'es' => 'Servicios Creativos y de Diseño',
                    'pl' => 'Usługi Kreatywne i Projektowe'
                ]),
                'scom' => 'Creative and design services businesses',
                'scom_translations' => json_encode([
                    'en' => 'Creative and design services businesses',
                    'de' => 'Kreativ- und Design-Dienstleistungsunternehmen',
                    'es' => 'Empresas de servicios creativos y de diseño',
                    'pl' => 'Firmy świadczące usługi kreatywne i projektowe'
                ])
            ],
            [
                'id' => 4,
                'parent_id' => 0,
                'slug' => 'technology-services',
                'name' => 'Technology Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technology Services',
                    'de' => 'Technologiedienstleistungen',
                    'es' => 'Servicios Tecnológicos',
                    'pl' => 'Usługi Technologiczne'
                ]),
                'scom' => 'Technology services businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Technology services businesses and firms',
                    'de' => 'Technologiedienstleistungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de servicios tecnológicos',
                    'pl' => 'Firmy i przedsiębiorstwa świadczące usługi technologiczne'
                ])
            ],
            [
                'id' => 5,
                'parent_id' => 0,
                'slug' => 'education-training',
                'name' => 'Education & Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Education & Training',
                    'de' => 'Bildungs- und Trainingsdienstleistungen',
                    'es' => 'Servicios de Educación y Capacitación',
                    'pl' => 'Usługi Edukacyjne i Szkoleniowe'
                ]),
                'scom' => 'Education and training services businesses',
                'scom_translations' => json_encode([
                    'en' => 'Education and training services businesses',
                    'de' => 'Bildungs- und Trainingsdienstleistungsunternehmen',
                    'es' => 'Empresas de servicios de educación y capacitación',
                    'pl' => 'Firmy świadczące usługi edukacyjne i szkoleniowe'
                ])
            ],
            [
                'id' => 6,
                'parent_id' => 0,
                'slug' => 'ecommerce-retail',
                'name' => 'E-commerce & Retail',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'E-commerce & Retail',
                    'de' => 'E-Commerce und Einzelhandel',
                    'es' => 'Comercio Electrónico y Retail',
                    'pl' => 'E-commerce i Handel Detaliczny'
                ]),
                'scom' => 'E-commerce and retail businesses',
                'scom_translations' => json_encode([
                    'en' => 'E-commerce and retail businesses',
                    'de' => 'E-Commerce- und Einzelhandelsunternehmen',
                    'es' => 'Empresas de comercio electrónico y retail',
                    'pl' => 'Firmy e-commerce i handel detaliczny'
                ])
            ],
            [
                'id' => 7,
                'parent_id' => 0,
                'slug' => 'media-content',
                'name' => 'Media & Content',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Media & Content',
                    'de' => 'Medien- und Inhaltsdienste',
                    'es' => 'Servicios de Medios y Contenido',
                    'pl' => 'Usługi Mediów i Treści'
                ]),
                'scom' => 'Media and content services businesses',
                'scom_translations' => json_encode([
                    'en' => 'Media and content services businesses',
                    'de' => 'Medien- und Inhaltsdienstleistungsunternehmen',
                    'es' => 'Empresas de servicios de medios y contenido',
                    'pl' => 'Firmy świadczące usługi mediów i treści'
                ])
            ],
            [
                'id' => 8,
                'parent_id' => 0,
                'slug' => 'real-estate-investment',
                'name' => 'Real Estate & Investment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate & Investment',
                    'de' => 'Immobilien und Investitionen',
                    'es' => 'Bienes Raíces e Inversiones',
                    'pl' => 'Nieruchomości i Inwestycje'
                ]),
                'scom' => 'Real estate and investment businesses',
                'scom_translations' => json_encode([
                    'en' => 'Real estate and investment businesses',
                    'de' => 'Immobilien- und Investitionsunternehmen',
                    'es' => 'Empresas de bienes raíces e inversiones',
                    'pl' => 'Firmy nieruchomościowe i inwestycyjne'
                ])
            ],
            [
                'id' => 9,
                'parent_id' => 0,
                'slug' => 'financial-services',
                'name' => 'Financial Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Services',
                    'de' => 'Finanzdienstleistungen',
                    'es' => 'Servicios Financieros',
                    'pl' => 'Usługi Finansowe'
                ]),
                'scom' => 'Financial services businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Financial services businesses and firms',
                    'de' => 'Finanzdienstleistungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de servicios financieros',
                    'pl' => 'Firmy i przedsiębiorstwa świadczące usługi finansowe'
                ])
            ],
            [
                'id' => 10,
                'parent_id' => 0,
                'slug' => 'health-wellness',
                'name' => 'Health & Wellness',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Health & Wellness',
                    'de' => 'Gesundheit und Wellness',
                    'es' => 'Salud y Bienestar',
                    'pl' => 'Zdrowie i Wellness'
                ]),
                'scom' => 'Health and wellness businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Health and wellness businesses and firms',
                    'de' => 'Gesundheits- und Wellnessunternehmen und -firmen',
                    'es' => 'Empresas y firmas de salud y bienestar',
                    'pl' => 'Firmy i przedsiębiorstwa świadczące usługi zdrowia i wellness'
                ])
            ],
            [
                'id' => 11,
                'parent_id' => 0,
                'slug' => 'food-beverage',
                'name' => 'Food & Beverage',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food & Beverage',
                    'de' => 'Essen und Getränke',
                    'es' => 'Alimentos y Bebidas',
                    'pl' => 'Żywność i Napoje'
                ]),
                'scom' => 'Food and beverage businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Food and beverage businesses and firms',
                    'de' => 'Essen- und Getränkeunternehmen und -firmen',
                    'es' => 'Empresas y firmas de alimentos y bebidas',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się żywnością i napojami'
                ])
            ],
            [
                'id' => 12,
                'parent_id' => 0,
                'slug' => 'travel-hospitality',
                'name' => 'Travel & Hospitality',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel & Hospitality',
                    'de' => 'Reisen und Gastgewerbe',
                    'es' => 'Viajes y Hospitalidad',
                    'pl' => 'Podróże i Gościnność'
                ]),
                'scom' => 'Travel and hospitality businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Travel and hospitality businesses and firms',
                    'de' => 'Reise- und Gastgewerbeunternehmen und -firmen',
                    'es' => 'Empresas y firmas de viajes y hospitalidad',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się podróżami i gościnnością'
                ])
            ],
            [
                'id' => 13,
                'parent_id' => 0,
                'slug' => 'manufacturing-production',
                'name' => 'Manufacturing & Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Manufacturing & Production',
                    'de' => 'Herstellung und Produktion',
                    'es' => 'Manufactura y Producción',
                    'pl' => 'Produkcja i Wytwarzanie'
                ]),
                'scom' => 'Manufacturing and production businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Manufacturing and production businesses and firms',
                    'de' => 'Herstellungs- und Produktionsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de manufactura y producción',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się produkcją i wytwarzaniem'
                ])
            ],
            [
                'id' => 14,
                'parent_id' => 0,
                'slug' => 'transportation-logistics',
                'name' => 'Transportation & Logistics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Transportation & Logistics',
                    'de' => 'Transport und Logistik',
                    'es' => 'Transporte y Logística',
                    'pl' => 'Transport i Logistyka'
                ]),
                'scom' => 'Transportation and logistics businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Transportation and logistics businesses and firms',
                    'de' => 'Transport- und Logistikunternehmen und -firmen',
                    'es' => 'Empresas y firmas de transporte y logística',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się transportem i logistyką'
                ])
            ],
            [
                'id' => 15,
                'parent_id' => 0,
                'slug' => 'entertainment-events',
                'name' => 'Entertainment & Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Entertainment & Events',
                    'de' => 'Unterhaltung und Veranstaltungen',
                    'es' => 'Entretenimiento y Eventos',
                    'pl' => 'Rozrywka i Wydarzenia'
                ]),
                'scom' => 'Entertainment and events businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Entertainment and events businesses and firms',
                    'de' => 'Unterhaltungs- und Veranstaltungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de entretenimiento y eventos',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się rozrywką i wydarzeniami'
                ])
            ],
            [
                'id' => 16,
                'parent_id' => 0,
                'slug' => 'personal-services',
                'name' => 'Personal Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Services',
                    'de' => 'Persönliche Dienstleistungen',
                    'es' => 'Servicios Personales',
                    'pl' => 'Usługi Osobiste'
                ]),
                'scom' => 'Personal services businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Personal services businesses and firms',
                    'de' => 'Persönliche Dienstleistungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de servicios personales',
                    'pl' => 'Firmy i przedsiębiorstwa świadczące usługi osobiste'
                ])
            ],
            [
                'id' => 17,
                'parent_id' => 0,
                'slug' => 'agriculture-environment',
                'name' => 'Agriculture & Environment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Agriculture & Environment',
                    'de' => 'Landwirtschaft und Umwelt',
                    'es' => 'Agricultura y Medio Ambiente',
                    'pl' => 'Rolnictwo i Środowisko'
                ]),
                'scom' => 'Agriculture and environment businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Agriculture and environment businesses and firms',
                    'de' => 'Landwirtschafts- und Umweltunternehmen und -firmen',
                    'es' => 'Empresas y firmas de agricultura y medio ambiente',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się rolnictwem i środowiskiem'
                ])
            ],
            [
                'id' => 18,
                'parent_id' => 0,
                'slug' => 'automotive-services',
                'name' => 'Automotive Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Automotive Services',
                    'de' => 'Automobil-Dienstleistungen',
                    'es' => 'Servicios Automotrices',
                    'pl' => 'Usługi Motoryzacyjne'
                ]),
                'scom' => 'Automotive services businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Automotive services businesses and firms',
                    'de' => 'Automobil-Dienstleistungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de servicios automotrices',
                    'pl' => 'Firmy i przedsiębiorstwa świadczące usługi motoryzacyjne'
                ])
            ],
            [
                'id' => 19,
                'parent_id' => 0,
                'slug' => 'home-lifestyle',
                'name' => 'Home & Lifestyle',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home & Lifestyle',
                    'de' => 'Haus und Lebensstil',
                    'es' => 'Hogar y Estilo de Vida',
                    'pl' => 'Dom i Styl Życia'
                ]),
                'scom' => 'Home and lifestyle businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Home and lifestyle businesses and firms',
                    'de' => 'Haus- und Lifestyle-Unternehmen und -firmen',
                    'es' => 'Empresas y firmas de hogar y estilo de vida',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się domem i stylem życia'
                ])
            ],
            [
                'id' => 20,
                'parent_id' => 0,
                'slug' => 'sports-recreation',
                'name' => 'Sports & Recreation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports & Recreation',
                    'de' => 'Sport und Freizeit',
                    'es' => 'Deportes y Recreación',
                    'pl' => 'Sport i Rekreacja'
                ]),
                'scom' => 'Sports and recreation businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Sports and recreation businesses and firms',
                    'de' => 'Sport- und Freizeitunternehmen und -firmen',
                    'es' => 'Empresas y firmas de deportes y recreación',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się sportem i rekreacją'
                ])
            ],
            [
                'id' => 21,
                'parent_id' => 0,
                'slug' => 'arts-crafts',
                'name' => 'Arts & Crafts',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Arts & Crafts',
                    'de' => 'Kunst und Handwerk',
                    'es' => 'Artes y Manualidades',
                    'pl' => 'Sztuka i Rękodzieło'
                ]),
                'scom' => 'Arts and crafts businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Arts and crafts businesses and firms',
                    'de' => 'Kunst- und Handwerksunternehmen und -firmen',
                    'es' => 'Empresas y firmas de artes y manualidades',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się sztuką i rękodziełem'
                ])
            ],
            [
                'id' => 22,
                'parent_id' => 0,
                'slug' => 'import-export-trading',
                'name' => 'Import/Export & Trading',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Import/Export & Trading',
                    'de' => 'Import/Export und Handel',
                    'es' => 'Importación/Exportación y Comercio',
                    'pl' => 'Import/Export i Handel'
                ]),
                'scom' => 'Import/export and trading businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Import/export and trading businesses and firms',
                    'de' => 'Import/Export- und Handelsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de importación/exportación y comercio',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się importem/eksportem i handlem'
                ])
            ],
            [
                'id' => 23,
                'parent_id' => 0,
                'slug' => 'franchise-licensing',
                'name' => 'Franchise & Licensing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise & Licensing',
                    'de' => 'Franchise und Lizenzierung',
                    'es' => 'Franquicia y Licencias',
                    'pl' => 'Franczyza i Licencjonowanie'
                ]),
                'scom' => 'Franchise and licensing businesses and firms',
                'scom_translations' => json_encode([
                    'en' => 'Franchise and licensing businesses and firms',
                    'de' => 'Franchise- und Lizenzierungsunternehmen und -firmen',
                    'es' => 'Empresas y firmas de franquicia y licencias',
                    'pl' => 'Firmy i przedsiębiorstwa zajmujące się franczyzą i licencjonowaniem'
                ])
            ],
            [
                'id' => 24,
                'parent_id' => 0,
                'slug' => 'other-business-ventures',
                'name' => 'Other Business Ventures',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Other Business Ventures',
                    'de' => 'Andere Geschäftsvorhaben',
                    'es' => 'Otros Negocios',
                    'pl' => 'Inne Przedsiębiorstwa'
                ]),
                'scom' => 'Other business ventures and firms',
                'scom_translations' => json_encode([
                    'en' => 'Other business ventures and firms',
                    'de' => 'Andere Geschäftsvorhaben und -firmen',
                    'es' => 'Otras empresas y firmas',
                    'pl' => 'Inne firmy i przedsiębiorstwa'
                ])
            ],
            [
                'id' => 25,
                'parent_id' => 1,
                'slug' => 'business-strategy-consulting',
                'name' => 'Business Strategy Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Strategy Consulting',
                    'de' => 'Geschäftsstrategie-Beratung',
                    'es' => 'Consultoría de Estrategia Empresarial',
                    'pl' => 'Doradztwo w Zakresie Strategii Biznesowej'
                ]),
                'scom' => 'Strategic business planning and consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Strategic business planning and consulting services',
                    'de' => 'Strategische Geschäftsplanung und Beratungsdienstleistungen',
                    'es' => 'Servicios de planificación estratégica empresarial y consultoría',
                    'pl' => 'Usługi strategicznego planowania biznesowego i doradztwa'
                ])
            ],
            [
                'id' => 26,
                'parent_id' => 1,
                'slug' => 'management-consulting',
                'name' => 'Management Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Management Consulting',
                    'de' => 'Management-Beratung',
                    'es' => 'Consultoría de Gestión',
                    'pl' => 'Doradztwo w Zakresie Zarządzania'
                ]),
                'scom' => 'Management and organizational consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Management and organizational consulting services',
                    'de' => 'Management- und Organisationsberatungsdienstleistungen',
                    'es' => 'Servicios de consultoría de gestión y organizacional',
                    'pl' => 'Usługi doradztwa w zakresie zarządzania i organizacji'
                ])
            ],
            [
                'id' => 27,
                'parent_id' => 1,
                'slug' => 'technology-consulting',
                'name' => 'Technology Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technology Consulting',
                    'de' => 'Technologie-Beratung',
                    'es' => 'Consultoría Tecnológica',
                    'pl' => 'Doradztwo Technologiczne'
                ]),
                'scom' => 'Technology strategy and implementation consulting',
                'scom_translations' => json_encode([
                    'en' => 'Technology strategy and implementation consulting',
                    'de' => 'Technologiestrategie und Implementierungsberatung',
                    'es' => 'Consultoría de estrategia tecnológica e implementación',
                    'pl' => 'Doradztwo w zakresie strategii technologicznej i wdrażania'
                ])
            ],
            [
                'id' => 28,
                'parent_id' => 1,
                'slug' => 'marketing-consulting',
                'name' => 'Marketing Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing Consulting',
                    'de' => 'Marketing-Beratung',
                    'es' => 'Consultoría de Marketing',
                    'pl' => 'Doradztwo Marketingowe'
                ]),
                'scom' => 'Marketing strategy and campaign consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Marketing strategy and campaign consulting services',
                    'de' => 'Marketing-Strategie und Kampagnen-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de estrategia de marketing y campañas',
                    'pl' => 'Usługi doradztwa w zakresie strategii marketingowej i kampanii'
                ])
            ],
            [
                'id' => 29,
                'parent_id' => 1,
                'slug' => 'financial-consulting',
                'name' => 'Financial Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Consulting',
                    'de' => 'Finanz-Beratung',
                    'es' => 'Consultoría Financiera',
                    'pl' => 'Doradztwo Finansowe'
                ]),
                'scom' => 'Financial planning and advisory consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Financial planning and advisory consulting services',
                    'de' => 'Finanzplanung und beratende Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de planificación financiera y asesoría',
                    'pl' => 'Usługi doradztwa w zakresie planowania finansowego i poradnictwa'
                ])
            ],
            [
                'id' => 30,
                'parent_id' => 1,
                'slug' => 'operations-consulting',
                'name' => 'Operations Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Operations Consulting',
                    'de' => 'Operations-Beratung',
                    'es' => 'Consultoría de Operaciones',
                    'pl' => 'Doradztwo Operacyjne'
                ]),
                'scom' => 'Operational efficiency and process consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Operational efficiency and process consulting services',
                    'de' => 'Operative Effizienz und Prozess-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de eficiencia operacional y procesos',
                    'pl' => 'Usługi doradztwa w zakresie efektywności operacyjnej i procesów'
                ])
            ],
            [
                'id' => 31,
                'parent_id' => 1,
                'slug' => 'digital-transformation-consulting',
                'name' => 'Digital Transformation Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Transformation Consulting',
                    'de' => 'Digitale Transformations-Beratung',
                    'es' => 'Consultoría de Transformación Digital',
                    'pl' => 'Doradztwo w Zakresie Transformacji Cyfrowej'
                ]),
                'scom' => 'Digital transformation strategy and implementation consulting',
                'scom_translations' => json_encode([
                    'en' => 'Digital transformation strategy and implementation consulting',
                    'de' => 'Digitale Transformationsstrategie und Implementierungsberatung',
                    'es' => 'Consultoría de estrategia de transformación digital e implementación',
                    'pl' => 'Doradztwo w zakresie strategii transformacji cyfrowej i wdrażania'
                ])
            ],
            [
                'id' => 32,
                'parent_id' => 1,
                'slug' => 'innovation-consulting',
                'name' => 'Innovation Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Innovation Consulting',
                    'de' => 'Innovations-Beratung',
                    'es' => 'Consultoría de Innovación',
                    'pl' => 'Doradztwo w Zakresie Innowacji'
                ]),
                'scom' => 'Innovation strategy and development consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Innovation strategy and development consulting services',
                    'de' => 'Innovationsstrategie und Entwicklungs-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de estrategia de innovación y desarrollo',
                    'pl' => 'Usługi doradztwa w zakresie strategii innowacji i rozwoju'
                ])
            ],
            [
                'id' => 33,
                'parent_id' => 1,
                'slug' => 'startup-advisory-services',
                'name' => 'Startup Advisory Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Advisory Services',
                    'de' => 'Startup-Beratungsdienste',
                    'es' => 'Servicios de Asesoría para Startups',
                    'pl' => 'Usługi Doradcze dla Startupów'
                ]),
                'scom' => 'Advisory and mentoring services for startup companies',
                'scom_translations' => json_encode([
                    'en' => 'Advisory and mentoring services for startup companies',
                    'de' => 'Beratungs- und Mentoring-Dienstleistungen für Startup-Unternehmen',
                    'es' => 'Servicios de asesoría y mentoría para empresas startup',
                    'pl' => 'Usługi doradcze i mentorskie dla firm startupowych'
                ])
            ],
            [
                'id' => 34,
                'parent_id' => 1,
                'slug' => 'executive-coaching',
                'name' => 'Executive Coaching',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Executive Coaching',
                    'de' => 'Führungskräfte-Coaching',
                    'es' => 'Coaching Ejecutivo',
                    'pl' => 'Coaching dla Kadry Kierowniczej'
                ]),
                'scom' => 'Leadership development and executive coaching services',
                'scom_translations' => json_encode([
                    'en' => 'Leadership development and executive coaching services',
                    'de' => 'Führungsentwicklung und Executive-Coaching-Dienstleistungen',
                    'es' => 'Servicios de desarrollo de liderazgo y coaching ejecutivo',
                    'pl' => 'Usługi rozwoju przywództwa i coachingu dla kadry kierowniczej'
                ])
            ],
            [
                'id' => 35,
                'parent_id' => 1,
                'slug' => 'other-business-consulting',
                'name' => 'Other Business Consulting',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Business Consulting',
                    'de' => 'Andere Unternehmensberatung',
                    'es' => 'Otra Consultoría Empresarial',
                    'pl' => 'Inne Doradztwo Biznesowe'
                ]),
                'scom' => 'Other business consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Other business consulting services',
                    'de' => 'Andere Unternehmensberatungsdienste',
                    'es' => 'Otros servicios de consultoría empresarial',
                    'pl' => 'Inne usługi doradztwa biznesowego'
                ])
            ],
            [
                'id' => 36,
                'parent_id' => 2,
                'slug' => 'legal-services',
                'name' => 'Legal Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Legal Services',
                    'de' => 'Rechtsdienstleistungen',
                    'es' => 'Servicios Legales',
                    'pl' => 'Usługi Prawne'
                ]),
                'scom' => 'Legal advice and representation services',
                'scom_translations' => json_encode([
                    'en' => 'Legal advice and representation services',
                    'de' => 'Rechtsberatung und Vertretungsdienstleistungen',
                    'es' => 'Servicios de asesoría legal y representación',
                    'pl' => 'Usługi doradztwa prawnego i reprezentacji'
                ])
            ],
            [
                'id' => 37,
                'parent_id' => 2,
                'slug' => 'accounting-tax-services',
                'name' => 'Accounting & Tax Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Accounting & Tax Services',
                    'de' => 'Buchhaltungs- und Steuerdienstleistungen',
                    'es' => 'Servicios de Contabilidad e Impuestos',
                    'pl' => 'Usługi Księgowe i Podatkowe'
                ]),
                'scom' => 'Professional accounting and tax preparation services',
                'scom_translations' => json_encode([
                    'en' => 'Professional accounting and tax preparation services',
                    'de' => 'Professionelle Buchhaltungs- und Steuervorbereitung',
                    'es' => 'Servicios profesionales de contabilidad y preparación de impuestos',
                    'pl' => 'Profesjonalne usługi księgowe i przygotowanie podatków'
                ])
            ],
            [
                'id' => 38,
                'parent_id' => 2,
                'slug' => 'financial-planning',
                'name' => 'Financial Planning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Planning',
                    'de' => 'Finanzplanung',
                    'es' => 'Planificación Financiera',
                    'pl' => 'Planowanie Finansowe'
                ]),
                'scom' => 'Personal and business financial planning services',
                'scom_translations' => json_encode([
                    'en' => 'Personal and business financial planning services',
                    'de' => 'Persönliche und geschäftliche Finanzplanungsdienstleistungen',
                    'es' => 'Servicios de planificación financiera personal y empresarial',
                    'pl' => 'Usługi planowania finansowego osobistego i biznesowego'
                ])
            ],
            [
                'id' => 39,
                'parent_id' => 2,
                'slug' => 'investment-advisory',
                'name' => 'Investment Advisory',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investment Advisory',
                    'de' => 'Anlageberatung',
                    'es' => 'Asesoría de Inversiones',
                    'pl' => 'Doradztwo Inwestycyjne'
                ]),
                'scom' => 'Investment strategy and portfolio advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Investment strategy and portfolio advisory services',
                    'de' => 'Anlagestrategie und Portfolio-Beratungsdienstleistungen',
                    'es' => 'Servicios de asesoría de estrategia de inversión y portafolio',
                    'pl' => 'Usługi doradztwa w zakresie strategii inwestycyjnej i portfela'
                ])
            ],
            [
                'id' => 40,
                'parent_id' => 2,
                'slug' => 'real-estate-services',
                'name' => 'Real Estate Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Services',
                    'de' => 'Immobiliendienstleistungen',
                    'es' => 'Servicios Inmobiliarios',
                    'pl' => 'Usługi Nieruchomościowe'
                ]),
                'scom' => 'Real estate brokerage and property services',
                'scom_translations' => json_encode([
                    'en' => 'Real estate brokerage and property services',
                    'de' => 'Immobilienmakler und Immobiliendienstleistungen',
                    'es' => 'Servicios de corretaje inmobiliario y propiedades',
                    'pl' => 'Usługi pośrednictwa nieruchomościowego i obsługi nieruchomości'
                ])
            ],
            [
                'id' => 41,
                'parent_id' => 2,
                'slug' => 'insurance-brokerage',
                'name' => 'Insurance Brokerage',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Insurance Brokerage',
                    'de' => 'Versicherungsmakler',
                    'es' => 'Correduría de Seguros',
                    'pl' => 'Brokerstwo Ubezpieczeniowe'
                ]),
                'scom' => 'Insurance brokerage and risk management services',
                'scom_translations' => json_encode([
                    'en' => 'Insurance brokerage and risk management services',
                    'de' => 'Versicherungsmakler und Risikomanagement-Dienstleistungen',
                    'es' => 'Servicios de correduría de seguros y gestión de riesgos',
                    'pl' => 'Usługi brokerstwa ubezpieczeniowego i zarządzania ryzykiem'
                ])
            ],
            [
                'id' => 42,
                'parent_id' => 2,
                'slug' => 'business-brokerage',
                'name' => 'Business Brokerage',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Brokerage',
                    'de' => 'Unternehmensmakler',
                    'es' => 'Correduría de Negocios',
                    'pl' => 'Pośrednictwo w Sprzedaży Biznesów'
                ]),
                'scom' => 'Business buying and selling brokerage services',
                'scom_translations' => json_encode([
                    'en' => 'Business buying and selling brokerage services',
                    'de' => 'Dienstleistungen für Kauf und Verkauf von Unternehmen',
                    'es' => 'Servicios de correduría para compra y venta de negocios',
                    'pl' => 'Usługi pośrednictwa w kupnie i sprzedaży biznesów'
                ])
            ],
            [
                'id' => 43,
                'parent_id' => 2,
                'slug' => 'merger-acquisition-advisory',
                'name' => 'Merger & Acquisition Advisory',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Merger & Acquisition Advisory',
                    'de' => 'Fusions- und Übernahmeberatung',
                    'es' => 'Asesoría en Fusiones y Adquisiciones',
                    'pl' => 'Doradztwo w Zakresie Fuzji i Przejęć'
                ]),
                'scom' => 'M&A transaction advisory and due diligence services',
                'scom_translations' => json_encode([
                    'en' => 'M&A transaction advisory and due diligence services',
                    'de' => 'M&A-Transaktionsberatung und Due-Diligence-Dienstleistungen',
                    'es' => 'Servicios de asesoría en transacciones de M&A y due diligence',
                    'pl' => 'Usługi doradztwa transakcyjnego M&A i due diligence'
                ])
            ],
            [
                'id' => 44,
                'parent_id' => 2,
                'slug' => 'intellectual-property-services',
                'name' => 'Intellectual Property Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Intellectual Property Services',
                    'de' => 'Dienstleistungen für geistiges Eigentum',
                    'es' => 'Servicios de Propiedad Intelectual',
                    'pl' => 'Usługi Własności Intelektualnej'
                ]),
                'scom' => 'Patent, trademark and IP protection services',
                'scom_translations' => json_encode([
                    'en' => 'Patent, trademark and IP protection services',
                    'de' => 'Patent-, Marken- und IP-Schutzdienstleistungen',
                    'es' => 'Servicios de protección de patentes, marcas registradas y PI',
                    'pl' => 'Usługi ochrony patentów, znaków towarowych i własności intelektualnej'
                ])
            ],
            [
                'id' => 45,
                'parent_id' => 2,
                'slug' => 'compliance-consulting',
                'name' => 'Compliance Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Compliance Consulting',
                    'de' => 'Compliance-Beratung',
                    'es' => 'Consultoría de Cumplimiento',
                    'pl' => 'Doradztwo w Zakresie Zgodności'
                ]),
                'scom' => 'Regulatory compliance and governance consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Regulatory compliance and governance consulting services',
                    'de' => 'Beratungsdienstleistungen für regulatorische Compliance und Governance',
                    'es' => 'Servicios de consultoría de cumplimiento regulatorio y gobernanza',
                    'pl' => 'Usługi doradztwa w zakresie zgodności regulacyjnej i zarządzania'
                ])
            ],
            [
                'id' => 46,
                'parent_id' => 2,
                'slug' => 'audit-assurance-services',
                'name' => 'Audit & Assurance Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Audit & Assurance Services',
                    'de' => 'Audit- und Assurance-Dienstleistungen',
                    'es' => 'Servicios de Auditoría y Aseguramiento',
                    'pl' => 'Usługi Audytu i Zapewnienia'
                ]),
                'scom' => 'Financial audit and assurance consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Financial audit and assurance consulting services',
                    'de' => 'Finanzaudit und Assurance-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de auditoría financiera y aseguramiento',
                    'pl' => 'Usługi doradztwa w zakresie audytu finansowego i zapewnienia'
                ])
            ],
            [
                'id' => 47,
                'parent_id' => 2,
                'slug' => 'notary-services',
                'name' => 'Notary Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Notary Services',
                    'de' => 'Notardienstleistungen',
                    'es' => 'Servicios Notariales',
                    'pl' => 'Usługi Notarialne'
                ]),
                'scom' => 'Document notarization and authentication services',
                'scom_translations' => json_encode([
                    'en' => 'Document notarization and authentication services',
                    'de' => 'Dokumentenbeglaubigung und Authentifizierungsdienstleistungen',
                    'es' => 'Servicios de notarización y autenticación de documentos',
                    'pl' => 'Usługi notaryzacji i uwierzytelniania dokumentów'
                ])
            ],
            [
                'id' => 48,
                'parent_id' => 2,
                'slug' => 'corporate-secretarial-services',
                'name' => 'Corporate Secretarial Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Secretarial Services',
                    'de' => 'Unternehmenssekretariat',
                    'es' => 'Servicios de Secretaría Corporativa',
                    'pl' => 'Usługi Sekretariatu Korporacyjnego'
                ]),
                'scom' => 'Corporate governance and secretarial services',
                'scom_translations' => json_encode([
                    'en' => 'Corporate governance and secretarial services',
                    'de' => 'Corporate Governance und Sekretariatsdienstleistungen',
                    'es' => 'Servicios de gobierno corporativo y secretaría',
                    'pl' => 'Usługi ładu korporacyjnego i sekretariatu'
                ])
            ],
            [
                'id' => 49,
                'parent_id' => 2,
                'slug' => 'valuation-services',
                'name' => 'Valuation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Valuation Services',
                    'de' => 'Bewertungsdienstleistungen',
                    'es' => 'Servicios de Valuación',
                    'pl' => 'Usługi Wyceny'
                ]),
                'scom' => 'Business and asset valuation services',
                'scom_translations' => json_encode([
                    'en' => 'Business and asset valuation services',
                    'de' => 'Geschäfts- und Vermögensbewertungsdienstleistungen',
                    'es' => 'Servicios de valuación de negocios y activos',
                    'pl' => 'Usługi wyceny biznesu i aktywów'
                ])
            ],
            [
                'id' => 50,
                'parent_id' => 2,
                'slug' => 'forensic-accounting',
                'name' => 'Forensic Accounting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Forensic Accounting',
                    'de' => 'Forensische Buchhaltung',
                    'es' => 'Contabilidad Forense',
                    'pl' => 'Księgowość Sądowa'
                ]),
                'scom' => 'Forensic accounting and fraud investigation services',
                'scom_translations' => json_encode([
                    'en' => 'Forensic accounting and fraud investigation services',
                    'de' => 'Forensische Buchhaltung und Betrugsermittlungsdienstleistungen',
                    'es' => 'Servicios de contabilidad forense e investigación de fraudes',
                    'pl' => 'Usługi księgowości sądowej i dochodzenia oszustw'
                ])
            ],
            [
                'id' => 51,
                'parent_id' => 2,
                'slug' => 'others-professional-services',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other professional services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other professional services not listed above',
                    'de' => 'Andere professionelle Dienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios profesionales no listados arriba',
                    'pl' => 'Inne usługi profesjonalne niewymienione powyżej'
                ])
            ],
            [
                'id' => 52,
                'parent_id' => 3,
                'slug' => 'graphic-design-agency',
                'name' => 'Graphic Design Agency',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Graphic Design Agency',
                    'de' => 'Grafikdesign-Agentur',
                    'es' => 'Agencia de Diseño Gráfico',
                    'pl' => 'Agencja Projektowania Graficznego'
                ]),
                'scom' => 'Professional graphic design and visual communication services',
                'scom_translations' => json_encode([
                    'en' => 'Professional graphic design and visual communication services',
                    'de' => 'Professionelle Grafikdesign- und visuelle Kommunikationsdienstleistungen',
                    'es' => 'Servicios profesionales de diseño gráfico y comunicación visual',
                    'pl' => 'Profesjonalne usługi projektowania graficznego i komunikacji wizualnej'
                ])
            ],
            [
                'id' => 53,
                'parent_id' => 3,
                'slug' => 'web-design-services',
                'name' => 'Web Design Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Web Design Services',
                    'de' => 'Webdesign-Dienstleistungen',
                    'es' => 'Servicios de Diseño Web',
                    'pl' => 'Usługi Projektowania Stron Internetowych'
                ]),
                'scom' => 'Website design and user experience services',
                'scom_translations' => json_encode([
                    'en' => 'Website design and user experience services',
                    'de' => 'Website-Design und Benutzererfahrungsdienstleistungen',
                    'es' => 'Servicios de diseño de sitios web y experiencia de usuario',
                    'pl' => 'Usługi projektowania stron internetowych i doświadczenia użytkownika'
                ])
            ],
            [
                'id' => 54,
                'parent_id' => 3,
                'slug' => 'brand-development',
                'name' => 'Brand Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Brand Development',
                    'de' => 'Markenentwicklung',
                    'es' => 'Desarrollo de Marca',
                    'pl' => 'Rozwój Marki'
                ]),
                'scom' => 'Brand identity and strategy development services',
                'scom_translations' => json_encode([
                    'en' => 'Brand identity and strategy development services',
                    'de' => 'Markenidentität und Strategieentwicklungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de identidad y estrategia de marca',
                    'pl' => 'Usługi rozwoju tożsamości i strategii marki'
                ])
            ],
            [
                'id' => 55,
                'parent_id' => 3,
                'slug' => 'marketing-agency',
                'name' => 'Marketing Agency',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing Agency',
                    'de' => 'Marketing-Agentur',
                    'es' => 'Agencia de Marketing',
                    'pl' => 'Agencja Marketingowa'
                ]),
                'scom' => 'Full-service marketing and advertising agency services',
                'scom_translations' => json_encode([
                    'en' => 'Full-service marketing and advertising agency services',
                    'de' => 'Full-Service-Marketing- und Werbeagenturdienstleistungen',
                    'es' => 'Servicios completos de agencia de marketing y publicidad',
                    'pl' => 'Kompleksowe usługi agencji marketingowej i reklamowej'
                ])
            ],
            [
                'id' => 56,
                'parent_id' => 3,
                'slug' => 'advertising-services',
                'name' => 'Advertising Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Advertising Services',
                    'de' => 'Werbedienstleistungen',
                    'es' => 'Servicios de Publicidad',
                    'pl' => 'Usługi Reklamowe'
                ]),
                'scom' => 'Creative advertising and campaign development services',
                'scom_translations' => json_encode([
                    'en' => 'Creative advertising and campaign development services',
                    'de' => 'Kreative Werbung und Kampagnenentwicklungsdienstleistungen',
                    'es' => 'Servicios creativos de publicidad y desarrollo de campañas',
                    'pl' => 'Kreatywne usługi reklamowe i rozwoju kampanii'
                ])
            ],
            [
                'id' => 57,
                'parent_id' => 3,
                'slug' => 'content-creation',
                'name' => 'Content Creation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Creation',
                    'de' => 'Content-Erstellung',
                    'es' => 'Creación de Contenido',
                    'pl' => 'Tworzenie Treści'
                ]),
                'scom' => 'Digital and print content creation services',
                'scom_translations' => json_encode([
                    'en' => 'Digital and print content creation services',
                    'de' => 'Digitale und gedruckte Content-Erstellungsdienstleistungen',
                    'es' => 'Servicios de creación de contenido digital e impreso',
                    'pl' => 'Usługi tworzenia treści cyfrowych i drukowanych'
                ])
            ],
            [
                'id' => 58,
                'parent_id' => 3,
                'slug' => 'video-production',
                'name' => 'Video Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Video Production',
                    'de' => 'Videoproduktion',
                    'es' => 'Producción de Video',
                    'pl' => 'Produkcja Wideo'
                ]),
                'scom' => 'Professional video production and editing services',
                'scom_translations' => json_encode([
                    'en' => 'Professional video production and editing services',
                    'de' => 'Professionelle Videoproduktions- und Bearbeitungsdienstleistungen',
                    'es' => 'Servicios profesionales de producción y edición de video',
                    'pl' => 'Profesjonalne usługi produkcji i montażu wideo'
                ])
            ],
            [
                'id' => 59,
                'parent_id' => 3,
                'slug' => 'photography-services',
                'name' => 'Photography Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Photography Services',
                    'de' => 'Fotografiedienstleistungen',
                    'es' => 'Servicios de Fotografía',
                    'pl' => 'Usługi Fotograficzne'
                ]),
                'scom' => 'Professional photography and image services',
                'scom_translations' => json_encode([
                    'en' => 'Professional photography and image services',
                    'de' => 'Professionelle Fotografie- und Bilddienstleistungen',
                    'es' => 'Servicios profesionales de fotografía e imagen',
                    'pl' => 'Profesjonalne usługi fotograficzne i obrazowe'
                ])
            ],
            [
                'id' => 60,
                'parent_id' => 3,
                'slug' => 'interior-design',
                'name' => 'Interior Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Interior Design',
                    'de' => 'Innenarchitektur',
                    'es' => 'Diseño de Interiores',
                    'pl' => 'Projektowanie Wnętrz'
                ]),
                'scom' => 'Interior design and space planning services',
                'scom_translations' => json_encode([
                    'en' => 'Interior design and space planning services',
                    'de' => 'Innenarchitektur und Raumplanungsdienstleistungen',
                    'es' => 'Servicios de diseño de interiores y planificación de espacios',
                    'pl' => 'Usługi projektowania wnętrz i planowania przestrzeni'
                ])
            ],
            [
                'id' => 61,
                'parent_id' => 3,
                'slug' => 'product-design',
                'name' => 'Product Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Design',
                    'de' => 'Produktdesign',
                    'es' => 'Diseño de Producto',
                    'pl' => 'Projektowanie Produktów'
                ]),
                'scom' => 'Industrial and consumer product design services',
                'scom_translations' => json_encode([
                    'en' => 'Industrial and consumer product design services',
                    'de' => 'Industrie- und Verbraucherproduktdesign-Dienstleistungen',
                    'es' => 'Servicios de diseño de productos industriales y de consumo',
                    'pl' => 'Usługi projektowania produktów przemysłowych i konsumenckich'
                ])
            ],
            [
                'id' => 62,
                'parent_id' => 3,
                'slug' => 'ui-ux-design',
                'name' => 'UI/UX Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'UI/UX Design',
                    'de' => 'UI/UX-Design',
                    'es' => 'Diseño UI/UX',
                    'pl' => 'Projektowanie UI/UX'
                ]),
                'scom' => 'User interface and user experience design services',
                'scom_translations' => json_encode([
                    'en' => 'User interface and user experience design services',
                    'de' => 'Benutzeroberflächen- und Benutzererfahrungs-Designdienstleistungen',
                    'es' => 'Servicios de diseño de interfaz de usuario y experiencia de usuario',
                    'pl' => 'Usługi projektowania interfejsu użytkownika i doświadczenia użytkownika'
                ])
            ],
            [
                'id' => 63,
                'parent_id' => 3,
                'slug' => 'animation-motion-graphics',
                'name' => 'Animation & Motion Graphics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Animation & Motion Graphics',
                    'de' => 'Animation und Motion Graphics',
                    'es' => 'Animación y Gráficos en Movimiento',
                    'pl' => 'Animacja i Grafika w Ruchu'
                ]),
                'scom' => 'Animation and motion graphics design services',
                'scom_translations' => json_encode([
                    'en' => 'Animation and motion graphics design services',
                    'de' => 'Animations- und Motion-Graphics-Designdienstleistungen',
                    'es' => 'Servicios de diseño de animación y gráficos en movimiento',
                    'pl' => 'Usługi projektowania animacji i grafiki w ruchu'
                ])
            ],
            [
                'id' => 64,
                'parent_id' => 3,
                'slug' => 'packaging-design',
                'name' => 'Packaging Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Packaging Design',
                    'de' => 'Verpackungsdesign',
                    'es' => 'Diseño de Empaques',
                    'pl' => 'Projektowanie Opakowań'
                ]),
                'scom' => 'Product packaging and label design services',
                'scom_translations' => json_encode([
                    'en' => 'Product packaging and label design services',
                    'de' => 'Produktverpackung und Etikettendesign-Dienstleistungen',
                    'es' => 'Servicios de diseño de empaques de productos y etiquetas',
                    'pl' => 'Usługi projektowania opakowań produktów i etykiet'
                ])
            ],
            [
                'id' => 65,
                'parent_id' => 3,
                'slug' => 'print-design',
                'name' => 'Print Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Print Design',
                    'de' => 'Druckdesign',
                    'es' => 'Diseño de Impresión',
                    'pl' => 'Projektowanie Druku'
                ]),
                'scom' => 'Print media and publication design services',
                'scom_translations' => json_encode([
                    'en' => 'Print media and publication design services',
                    'de' => 'Printmedien- und Publikationsdesign-Dienstleistungen',
                    'es' => 'Servicios de diseño de medios impresos y publicaciones',
                    'pl' => 'Usługi projektowania mediów drukowanych i publikacji'
                ])
            ],
            [
                'id' => 66,
                'parent_id' => 3,
                'slug' => 'fashion-design',
                'name' => 'Fashion Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fashion Design',
                    'de' => 'Modedesign',
                    'es' => 'Diseño de Moda',
                    'pl' => 'Projektowanie Mody'
                ]),
                'scom' => 'Fashion and apparel design services',
                'scom_translations' => json_encode([
                    'en' => 'Fashion and apparel design services',
                    'de' => 'Mode- und Bekleidungsdesign-Dienstleistungen',
                    'es' => 'Servicios de diseño de moda y prendas de vestir',
                    'pl' => 'Usługi projektowania mody i odzieży'
                ])
            ],
            [
                'id' => 67,
                'parent_id' => 3,
                'slug' => 'architectural-design',
                'name' => 'Architectural Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Architectural Design',
                    'de' => 'Architektonisches Design',
                    'es' => 'Diseño Arquitectónico',
                    'pl' => 'Projektowanie Architektoniczne'
                ]),
                'scom' => 'Architectural planning and design services',
                'scom_translations' => json_encode([
                    'en' => 'Architectural planning and design services',
                    'de' => 'Architektonische Planungs- und Designdienstleistungen',
                    'es' => 'Servicios de planificación y diseño arquitectónico',
                    'pl' => 'Usługi planowania i projektowania architektonicznego'
                ])
            ],
            [
                'id' => 68,
                'parent_id' => 3,
                'slug' => 'copywriting-services',
                'name' => 'Copywriting Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Copywriting Services',
                    'de' => 'Copywriting-Dienstleistungen',
                    'es' => 'Servicios de Redacción Publicitaria',
                    'pl' => 'Usługi Copywritingu'
                ]),
                'scom' => 'Creative writing and copywriting services',
                'scom_translations' => json_encode([
                    'en' => 'Creative writing and copywriting services',
                    'de' => 'Kreatives Schreiben und Copywriting-Dienstleistungen',
                    'es' => 'Servicios de escritura creativa y redacción publicitaria',
                    'pl' => 'Usługi kreatywnego pisania i copywritingu'
                ])
            ],
            [
                'id' => 69,
                'parent_id' => 3,
                'slug' => 'others-creative-design',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other creative and design services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other creative and design services not listed above',
                    'de' => 'Andere kreative und Design-Dienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios creativos y de diseño no listados arriba',
                    'pl' => 'Inne usługi kreatywne i projektowe niewymienione powyżej'
                ])
            ],
            [
                'id' => 70,
                'parent_id' => 4,
                'slug' => 'software-development',
                'name' => 'Software Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Software Development',
                    'de' => 'Softwareentwicklung',
                    'es' => 'Desarrollo de Software',
                    'pl' => 'Rozwój Oprogramowania'
                ]),
                'scom' => 'Custom software development and programming services',
                'scom_translations' => json_encode([
                    'en' => 'Custom software development and programming services',
                    'de' => 'Kundenspezifische Softwareentwicklung und Programmierungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de software personalizado y programación',
                    'pl' => 'Niestandardowe usługi rozwoju oprogramowania i programowania'
                ])
            ],
            [
                'id' => 71,
                'parent_id' => 4,
                'slug' => 'app-development',
                'name' => 'App Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'App Development',
                    'de' => 'App-Entwicklung',
                    'es' => 'Desarrollo de Aplicaciones',
                    'pl' => 'Rozwój Aplikacji'
                ]),
                'scom' => 'Mobile and web application development services',
                'scom_translations' => json_encode([
                    'en' => 'Mobile and web application development services',
                    'de' => 'Mobile und Web-Anwendungsentwicklungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de aplicaciones móviles y web',
                    'pl' => 'Usługi rozwoju aplikacji mobilnych i internetowych'
                ])
            ],
            [
                'id' => 72,
                'parent_id' => 4,
                'slug' => 'it-services-support',
                'name' => 'IT Services & Support',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'IT Services & Support',
                    'de' => 'IT-Dienstleistungen und Support',
                    'es' => 'Servicios y Soporte de TI',
                    'pl' => 'Usługi i Wsparcie IT'
                ]),
                'scom' => 'Information technology support and maintenance services',
                'scom_translations' => json_encode([
                    'en' => 'Information technology support and maintenance services',
                    'de' => 'Informationstechnologie-Support und Wartungsdienstleistungen',
                    'es' => 'Servicios de soporte y mantenimiento de tecnología de la información',
                    'pl' => 'Usługi wsparcia i konserwacji technologii informacyjnych'
                ])
            ],
            [
                'id' => 73,
                'parent_id' => 4,
                'slug' => 'cloud-computing-services',
                'name' => 'Cloud Computing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cloud Computing Services',
                    'de' => 'Cloud-Computing-Dienstleistungen',
                    'es' => 'Servicios de Computación en la Nube',
                    'pl' => 'Usługi Przetwarzania w Chmurze'
                ]),
                'scom' => 'Cloud infrastructure and migration services',
                'scom_translations' => json_encode([
                    'en' => 'Cloud infrastructure and migration services',
                    'de' => 'Cloud-Infrastruktur und Migrationsdienstleistungen',
                    'es' => 'Servicios de infraestructura en la nube y migración',
                    'pl' => 'Usługi infrastruktury chmurowej i migracji'
                ])
            ],
            [
                'id' => 74,
                'parent_id' => 4,
                'slug' => 'cybersecurity-services',
                'name' => 'Cybersecurity Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cybersecurity Services',
                    'de' => 'Cybersicherheitsdienste',
                    'es' => 'Servicios de Ciberseguridad',
                    'pl' => 'Usługi Cyberbezpieczeństwa'
                ]),
                'scom' => 'Information security and cyber protection services',
                'scom_translations' => json_encode([
                    'en' => 'Information security and cyber protection services',
                    'de' => 'Informationssicherheit und Cyber-Schutzdienstleistungen',
                    'es' => 'Servicios de seguridad de la información y protección cibernética',
                    'pl' => 'Usługi bezpieczeństwa informacji i ochrony cybernetycznej'
                ])
            ],
            [
                'id' => 75,
                'parent_id' => 4,
                'slug' => 'data-analytics-services',
                'name' => 'Data Analytics Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Data Analytics Services',
                    'de' => 'Datenanalyse-Dienstleistungen',
                    'es' => 'Servicios de Análisis de Datos',
                    'pl' => 'Usługi Analityki Danych'
                ]),
                'scom' => 'Data analysis and business intelligence services',
                'scom_translations' => json_encode([
                    'en' => 'Data analysis and business intelligence services',
                    'de' => 'Datenanalyse und Business-Intelligence-Dienstleistungen',
                    'es' => 'Servicios de análisis de datos e inteligencia empresarial',
                    'pl' => 'Usługi analizy danych i business intelligence'
                ])
            ],
            [
                'id' => 76,
                'parent_id' => 4,
                'slug' => 'digital-marketing-tools',
                'name' => 'Digital Marketing Tools',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Marketing Tools',
                    'de' => 'Digital-Marketing-Tools',
                    'es' => 'Herramientas de Marketing Digital',
                    'pl' => 'Narzędzia Marketingu Cyfrowego'
                ]),
                'scom' => 'Digital marketing software and automation tools',
                'scom_translations' => json_encode([
                    'en' => 'Digital marketing software and automation tools',
                    'de' => 'Digital-Marketing-Software und Automatisierungstools',
                    'es' => 'Software de marketing digital y herramientas de automatización',
                    'pl' => 'Oprogramowanie do marketingu cyfrowego i narzędzia automatyzacji'
                ])
            ],
            [
                'id' => 77,
                'parent_id' => 4,
                'slug' => 'saas-products',
                'name' => 'SaaS Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'SaaS Products',
                    'de' => 'SaaS-Produkte',
                    'es' => 'Productos SaaS',
                    'pl' => 'Produkty SaaS'
                ]),
                'scom' => 'Software as a Service product development and hosting',
                'scom_translations' => json_encode([
                    'en' => 'Software as a Service product development and hosting',
                    'de' => 'Software-as-a-Service-Produktentwicklung und Hosting',
                    'es' => 'Desarrollo y alojamiento de productos de Software como Servicio',
                    'pl' => 'Rozwój i hosting produktów Software as a Service'
                ])
            ],
            [
                'id' => 78,
                'parent_id' => 4,
                'slug' => 'tech-infrastructure-services',
                'name' => 'Tech Infrastructure Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tech Infrastructure Services',
                    'de' => 'Technische Infrastrukturdienste',
                    'es' => 'Servicios de Infraestructura Tecnológica',
                    'pl' => 'Usługi Infrastruktury Technologicznej'
                ]),
                'scom' => 'Technology infrastructure setup and management services',
                'scom_translations' => json_encode([
                    'en' => 'Technology infrastructure setup and management services',
                    'de' => 'Technologie-Infrastruktur-Setup und Managementdienstleistungen',
                    'es' => 'Servicios de configuración y gestión de infraestructura tecnológica',
                    'pl' => 'Usługi konfiguracji i zarządzania infrastrukturą technologiczną'
                ])
            ],
            [
                'id' => 79,
                'parent_id' => 4,
                'slug' => 'api-development',
                'name' => 'API Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'API Development',
                    'de' => 'API-Entwicklung',
                    'es' => 'Desarrollo de API',
                    'pl' => 'Rozwój API'
                ]),
                'scom' => 'Application programming interface development services',
                'scom_translations' => json_encode([
                    'en' => 'Application programming interface development services',
                    'de' => 'Anwendungsprogrammierschnittstellen-Entwicklungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de interfaces de programación de aplicaciones',
                    'pl' => 'Usługi rozwoju interfejsów programowania aplikacji'
                ])
            ],
            [
                'id' => 80,
                'parent_id' => 4,
                'slug' => 'artificial-intelligence-services',
                'name' => 'Artificial Intelligence Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Artificial Intelligence Services',
                    'de' => 'Künstliche-Intelligenz-Dienstleistungen',
                    'es' => 'Servicios de Inteligencia Artificial',
                    'pl' => 'Usługi Sztucznej Inteligencji'
                ]),
                'scom' => 'AI and machine learning development services',
                'scom_translations' => json_encode([
                    'en' => 'AI and machine learning development services',
                    'de' => 'KI- und maschinelle Lernentwicklungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de IA y aprendizaje automático',
                    'pl' => 'Usługi rozwoju sztucznej inteligencji i uczenia maszynowego'
                ])
            ],
            [
                'id' => 81,
                'parent_id' => 4,
                'slug' => 'blockchain-services',
                'name' => 'Blockchain Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Blockchain Services',
                    'de' => 'Blockchain-Dienstleistungen',
                    'es' => 'Servicios de Blockchain',
                    'pl' => 'Usługi Blockchain'
                ]),
                'scom' => 'Blockchain development and cryptocurrency services',
                'scom_translations' => json_encode([
                    'en' => 'Blockchain development and cryptocurrency services',
                    'de' => 'Blockchain-Entwicklung und Kryptowährungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de blockchain y criptomonedas',
                    'pl' => 'Usługi rozwoju blockchain i kryptowalut'
                ])
            ],
            [
                'id' => 82,
                'parent_id' => 4,
                'slug' => 'iot-services',
                'name' => 'IoT Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'IoT Services',
                    'de' => 'IoT-Dienstleistungen',
                    'es' => 'Servicios de IoT',
                    'pl' => 'Usługi IoT'
                ]),
                'scom' => 'Internet of Things development and integration services',
                'scom_translations' => json_encode([
                    'en' => 'Internet of Things development and integration services',
                    'de' => 'Internet-der-Dinge-Entwicklung und Integrationsdienstleistungen',
                    'es' => 'Servicios de desarrollo e integración del Internet de las Cosas',
                    'pl' => 'Usługi rozwoju i integracji Internetu Rzeczy'
                ])
            ],
            [
                'id' => 83,
                'parent_id' => 4,
                'slug' => 'devops-services',
                'name' => 'DevOps Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'DevOps Services',
                    'de' => 'DevOps-Dienstleistungen',
                    'es' => 'Servicios de DevOps',
                    'pl' => 'Usługi DevOps'
                ]),
                'scom' => 'Development operations and automation services',
                'scom_translations' => json_encode([
                    'en' => 'Development operations and automation services',
                    'de' => 'Entwicklungsoperationen und Automatisierungsdienstleistungen',
                    'es' => 'Servicios de operaciones de desarrollo y automatización',
                    'pl' => 'Usługi operacji rozwojowych i automatyzacji'
                ])
            ],
            [
                'id' => 84,
                'parent_id' => 4,
                'slug' => 'database-services',
                'name' => 'Database Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Database Services',
                    'de' => 'Datenbankdienstleistungen',
                    'es' => 'Servicios de Base de Datos',
                    'pl' => 'Usługi Bazodanowe'
                ]),
                'scom' => 'Database design, management and optimization services',
                'scom_translations' => json_encode([
                    'en' => 'Database design, management and optimization services',
                    'de' => 'Datenbankdesign, -verwaltung und -optimierungsdienstleistungen',
                    'es' => 'Servicios de diseño, gestión y optimización de bases de datos',
                    'pl' => 'Usługi projektowania, zarządzania i optymalizacji baz danych'
                ])
            ],
            [
                'id' => 85,
                'parent_id' => 4,
                'slug' => 'quality-assurance-testing',
                'name' => 'Quality Assurance & Testing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Quality Assurance & Testing',
                    'de' => 'Qualitätssicherung und Testen',
                    'es' => 'Aseguramiento de Calidad y Pruebas',
                    'pl' => 'Zapewnienie Jakości i Testowanie'
                ]),
                'scom' => 'Software testing and quality assurance services',
                'scom_translations' => json_encode([
                    'en' => 'Software testing and quality assurance services',
                    'de' => 'Software-Test und Qualitätssicherungsdienstleistungen',
                    'es' => 'Servicios de pruebas de software y aseguramiento de calidad',
                    'pl' => 'Usługi testowania oprogramowania i zapewnienia jakości'
                ])
            ],
            [
                'id' => 86,
                'parent_id' => 4,
                'slug' => 'others-tech-services',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other technology services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other technology services not listed above',
                    'de' => 'Andere Technologiedienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios tecnológicos no listados arriba',
                    'pl' => 'Inne usługi technologiczne niewymienione powyżej'
                ])
            ],
            [
                'id' => 87,
                'parent_id' => 5,
                'slug' => 'online-course-creation',
                'name' => 'Online Course Creation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Course Creation',
                    'de' => 'Online-Kurserstellung',
                    'es' => 'Creación de Cursos en Línea',
                    'pl' => 'Tworzenie Kursów Online'
                ]),
                'scom' => 'Development and delivery of online educational courses',
                'scom_translations' => json_encode([
                    'en' => 'Development and delivery of online educational courses',
                    'de' => 'Entwicklung und Bereitstellung von Online-Bildungskursen',
                    'es' => 'Desarrollo y entrega de cursos educativos en línea',
                    'pl' => 'Rozwój i dostarczanie kursów edukacyjnych online'
                ])
            ],
            [
                'id' => 88,
                'parent_id' => 5,
                'slug' => 'corporate-training',
                'name' => 'Corporate Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Training',
                    'de' => 'Unternehmenstraining',
                    'es' => 'Capacitación Corporativa',
                    'pl' => 'Szkolenia Korporacyjne'
                ]),
                'scom' => 'Professional development and corporate training services',
                'scom_translations' => json_encode([
                    'en' => 'Professional development and corporate training services',
                    'de' => 'Berufliche Entwicklung und Unternehmensschulungsdienstleistungen',
                    'es' => 'Servicios de desarrollo profesional y capacitación corporativa',
                    'pl' => 'Usługi rozwoju zawodowego i szkoleń korporacyjnych'
                ])
            ],
            [
                'id' => 89,
                'parent_id' => 5,
                'slug' => 'coaching-services',
                'name' => 'Coaching Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Coaching Services',
                    'de' => 'Coaching-Dienstleistungen',
                    'es' => 'Servicios de Coaching',
                    'pl' => 'Usługi Coachingowe'
                ]),
                'scom' => 'Personal and professional coaching services',
                'scom_translations' => json_encode([
                    'en' => 'Personal and professional coaching services',
                    'de' => 'Persönliche und berufliche Coaching-Dienstleistungen',
                    'es' => 'Servicios de coaching personal y profesional',
                    'pl' => 'Usługi coachingu osobistego i zawodowego'
                ])
            ],
            [
                'id' => 90,
                'parent_id' => 5,
                'slug' => 'mentorship-programs',
                'name' => 'Mentorship Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mentorship Programs',
                    'de' => 'Mentoring-Programme',
                    'es' => 'Programas de Mentoría',
                    'pl' => 'Programy Mentorskie'
                ]),
                'scom' => 'Structured mentorship and guidance programs',
                'scom_translations' => json_encode([
                    'en' => 'Structured mentorship and guidance programs',
                    'de' => 'Strukturierte Mentoring- und Beratungsprogramme',
                    'es' => 'Programas estructurados de mentoría y orientación',
                    'pl' => 'Ustrukturyzowane programy mentorskie i doradcze'
                ])
            ],
            [
                'id' => 91,
                'parent_id' => 5,
                'slug' => 'skills-development-programs',
                'name' => 'Skills Development Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Skills Development Programs',
                    'de' => 'Kompetenzentwicklungsprogramme',
                    'es' => 'Programas de Desarrollo de Habilidades',
                    'pl' => 'Programy Rozwoju Umiejętności'
                ]),
                'scom' => 'Professional and technical skills training programs',
                'scom_translations' => json_encode([
                    'en' => 'Professional and technical skills training programs',
                    'de' => 'Berufliche und technische Kompetenztrainingsprogramme',
                    'es' => 'Programas de capacitación en habilidades profesionales y técnicas',
                    'pl' => 'Programy szkoleniowe umiejętności zawodowych i technicznych'
                ])
            ],
            [
                'id' => 92,
                'parent_id' => 5,
                'slug' => 'educational-content',
                'name' => 'Educational Content',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Educational Content',
                    'de' => 'Bildungsinhalte',
                    'es' => 'Contenido Educativo',
                    'pl' => 'Treści Edukacyjne'
                ]),
                'scom' => 'Educational content creation and curriculum development',
                'scom_translations' => json_encode([
                    'en' => 'Educational content creation and curriculum development',
                    'de' => 'Erstellung von Bildungsinhalten und Lehrplanentwicklung',
                    'es' => 'Creación de contenido educativo y desarrollo curricular',
                    'pl' => 'Tworzenie treści edukacyjnych i rozwój programów nauczania'
                ])
            ],
            [
                'id' => 93,
                'parent_id' => 5,
                'slug' => 'workshop-facilitation',
                'name' => 'Workshop Facilitation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Workshop Facilitation',
                    'de' => 'Workshop-Facilitation',
                    'es' => 'Facilitación de Talleres',
                    'pl' => 'Prowadzenie Warsztatów'
                ]),
                'scom' => 'Interactive workshop design and facilitation services',
                'scom_translations' => json_encode([
                    'en' => 'Interactive workshop design and facilitation services',
                    'de' => 'Interaktive Workshop-Design und Facilitationsdienstleistungen',
                    'es' => 'Servicios de diseño y facilitación de talleres interactivos',
                    'pl' => 'Usługi projektowania i prowadzenia warsztatów interaktywnych'
                ])
            ],
            [
                'id' => 94,
                'parent_id' => 5,
                'slug' => 'speaking-services',
                'name' => 'Speaking Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Speaking Services',
                    'de' => 'Redner-Dienstleistungen',
                    'es' => 'Servicios de Oratoria',
                    'pl' => 'Usługi Mówców'
                ]),
                'scom' => 'Professional speaking and keynote presentation services',
                'scom_translations' => json_encode([
                    'en' => 'Professional speaking and keynote presentation services',
                    'de' => 'Professionelle Redner- und Keynote-Präsentationsdienstleistungen',
                    'es' => 'Servicios profesionales de oratoria y presentaciones magistrales',
                    'pl' => 'Profesjonalne usługi mówców i prezentacji kluczowych'
                ])
            ],
            [
                'id' => 95,
                'parent_id' => 5,
                'slug' => 'training-materials',
                'name' => 'Training Materials',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Training Materials',
                    'de' => 'Trainingsmaterialien',
                    'es' => 'Materiales de Capacitación',
                    'pl' => 'Materiały Szkoleniowe'
                ]),
                'scom' => 'Development of training materials and resources',
                'scom_translations' => json_encode([
                    'en' => 'Development of training materials and resources',
                    'de' => 'Entwicklung von Trainingsmaterialien und Ressourcen',
                    'es' => 'Desarrollo de materiales y recursos de capacitación',
                    'pl' => 'Rozwój materiałów szkoleniowych i zasobów'
                ])
            ],
            [
                'id' => 96,
                'parent_id' => 5,
                'slug' => 'elearning-platforms',
                'name' => 'E-learning Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'E-learning Platforms',
                    'de' => 'E-Learning-Plattformen',
                    'es' => 'Plataformas de E-learning',
                    'pl' => 'Platformy E-learningowe'
                ]),
                'scom' => 'Educational technology platforms and learning management systems',
                'scom_translations' => json_encode([
                    'en' => 'Educational technology platforms and learning management systems',
                    'de' => 'Bildungstechnologie-Plattformen und Lernmanagementsysteme',
                    'es' => 'Plataformas de tecnología educativa y sistemas de gestión del aprendizaje',
                    'pl' => 'Platformy technologii edukacyjnych i systemy zarządzania nauczaniem'
                ])
            ],
            [
                'id' => 97,
                'parent_id' => 5,
                'slug' => 'certification-programs',
                'name' => 'Certification Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Certification Programs',
                    'de' => 'Zertifizierungsprogramme',
                    'es' => 'Programas de Certificación',
                    'pl' => 'Programy Certyfikacyjne'
                ]),
                'scom' => 'Professional certification and accreditation programs',
                'scom_translations' => json_encode([
                    'en' => 'Professional certification and accreditation programs',
                    'de' => 'Berufliche Zertifizierungs- und Akkreditierungsprogramme',
                    'es' => 'Programas de certificación profesional y acreditación',
                    'pl' => 'Programy certyfikacji zawodowej i akredytacji'
                ])
            ],
            [
                'id' => 98,
                'parent_id' => 5,
                'slug' => 'language-training',
                'name' => 'Language Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Language Training',
                    'de' => 'Sprachtraining',
                    'es' => 'Capacitación en Idiomas',
                    'pl' => 'Szkolenia Językowe'
                ]),
                'scom' => 'Foreign language instruction and communication training',
                'scom_translations' => json_encode([
                    'en' => 'Foreign language instruction and communication training',
                    'de' => 'Fremdsprachenunterricht und Kommunikationstraining',
                    'es' => 'Instrucción en idiomas extranjeros y capacitación en comunicación',
                    'pl' => 'Nauczanie języków obcych i szkolenia komunikacyjne'
                ])
            ],
            [
                'id' => 99,
                'parent_id' => 5,
                'slug' => 'technical-training',
                'name' => 'Technical Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technical Training',
                    'de' => 'Technisches Training',
                    'es' => 'Capacitación Técnica',
                    'pl' => 'Szkolenia Techniczne'
                ]),
                'scom' => 'Specialized technical and software training services',
                'scom_translations' => json_encode([
                    'en' => 'Specialized technical and software training services',
                    'de' => 'Spezialisierte technische und Software-Trainingsdienstleistungen',
                    'es' => 'Servicios especializados de capacitación técnica y de software',
                    'pl' => 'Specjalistyczne usługi szkoleń technicznych i oprogramowania'
                ])
            ],
            [
                'id' => 100,
                'parent_id' => 5,
                'slug' => 'leadership-development',
                'name' => 'Leadership Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Leadership Development',
                    'de' => 'Führungskräfteentwicklung',
                    'es' => 'Desarrollo de Liderazgo',
                    'pl' => 'Rozwój Przywództwa'
                ]),
                'scom' => 'Leadership skills training and executive development programs',
                'scom_translations' => json_encode([
                    'en' => 'Leadership skills training and executive development programs',
                    'de' => 'Führungskompetenzen-Training und Executive-Entwicklungsprogramme',
                    'es' => 'Programas de capacitación en habilidades de liderazgo y desarrollo ejecutivo',
                    'pl' => 'Szkolenia umiejętności przywódczych i programy rozwoju kadry kierowniczej'
                ])
            ],
            [
                'id' => 101,
                'parent_id' => 5,
                'slug' => 'compliance-training',
                'name' => 'Compliance Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Compliance Training',
                    'de' => 'Compliance-Training',
                    'es' => 'Capacitación en Cumplimiento',
                    'pl' => 'Szkolenia z Zgodności'
                ]),
                'scom' => 'Regulatory compliance and policy training services',
                'scom_translations' => json_encode([
                    'en' => 'Regulatory compliance and policy training services',
                    'de' => 'Regulatorische Compliance- und Richtlinien-Trainingsdienstleistungen',
                    'es' => 'Servicios de capacitación en cumplimiento regulatorio y políticas',
                    'pl' => 'Usługi szkoleń z zakresu zgodności regulacyjnej i polityk'
                ])
            ],
            [
                'id' => 102,
                'parent_id' => 5,
                'slug' => 'others-education-training',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other education and training services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other education and training services not listed above',
                    'de' => 'Andere Bildungs- und Trainingsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de educación y capacitación no listados arriba',
                    'pl' => 'Inne usługi edukacyjne i szkoleniowe niewymienione powyżej'
                ])
            ],
            [
                'id' => 103,
                'parent_id' => 6,
                'slug' => 'online-retail-store',
                'name' => 'Online Retail Store',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Retail Store',
                    'de' => 'Online-Einzelhandelsgeschäft',
                    'es' => 'Tienda de Retail en Línea',
                    'pl' => 'Sklep Detaliczny Online'
                ]),
                'scom' => 'E-commerce retail store and online marketplace business',
                'scom_translations' => json_encode([
                    'en' => 'E-commerce retail store and online marketplace business',
                    'de' => 'E-Commerce-Einzelhandelsgeschäft und Online-Marktplatz-Geschäft',
                    'es' => 'Negocio de tienda de retail en línea y mercado digital',
                    'pl' => 'Biznes sklepu detalicznego e-commerce i platformy online'
                ])
            ],
            [
                'id' => 104,
                'parent_id' => 6,
                'slug' => 'dropshipping-business',
                'name' => 'Dropshipping Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Dropshipping Business',
                    'de' => 'Dropshipping-Geschäft',
                    'es' => 'Negocio de Dropshipping',
                    'pl' => 'Biznes Dropshippingowy'
                ]),
                'scom' => 'Product fulfillment and dropshipping retail business',
                'scom_translations' => json_encode([
                    'en' => 'Product fulfillment and dropshipping retail business',
                    'de' => 'Produkterfüllung und Dropshipping-Einzelhandelsgeschäft',
                    'es' => 'Negocio de cumplimiento de productos y retail de dropshipping',
                    'pl' => 'Biznes realizacji produktów i sprzedaży detalicznej dropshipping'
                ])
            ],
            [
                'id' => 105,
                'parent_id' => 6,
                'slug' => 'amazon-fba-business',
                'name' => 'Amazon FBA Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Amazon FBA Business',
                    'de' => 'Amazon FBA-Geschäft',
                    'es' => 'Negocio de Amazon FBA',
                    'pl' => 'Biznes Amazon FBA'
                ]),
                'scom' => 'Amazon fulfillment by Amazon retail business model',
                'scom_translations' => json_encode([
                    'en' => 'Amazon fulfillment by Amazon retail business model',
                    'de' => 'Amazon-Fulfillment-by-Amazon-Einzelhandelsgeschäftsmodell',
                    'es' => 'Modelo de negocio de retail de Amazon Fulfillment by Amazon',
                    'pl' => 'Model biznesowy sprzedaży detalicznej Amazon Fulfillment by Amazon'
                ])
            ],
            [
                'id' => 106,
                'parent_id' => 6,
                'slug' => 'digital-products',
                'name' => 'Digital Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Products',
                    'de' => 'Digitale Produkte',
                    'es' => 'Productos Digitales',
                    'pl' => 'Produkty Cyfrowe'
                ]),
                'scom' => 'Digital product creation and sales business',
                'scom_translations' => json_encode([
                    'en' => 'Digital product creation and sales business',
                    'de' => 'Digitale Produkterstellung und Verkaufsgeschäft',
                    'es' => 'Negocio de creación y venta de productos digitales',
                    'pl' => 'Biznes tworzenia i sprzedaży produktów cyfrowych'
                ])
            ],
            [
                'id' => 107,
                'parent_id' => 6,
                'slug' => 'subscription-box-service',
                'name' => 'Subscription Box Service',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Subscription Box Service',
                    'de' => 'Abonnement-Box-Service',
                    'es' => 'Servicio de Caja de Suscripción',
                    'pl' => 'Usługa Pudełek Subskrypcyjnych'
                ]),
                'scom' => 'Recurring subscription box and curated product services',
                'scom_translations' => json_encode([
                    'en' => 'Recurring subscription box and curated product services',
                    'de' => 'Wiederkehrende Abonnement-Box und kuratierte Produktdienstleistungen',
                    'es' => 'Servicios de caja de suscripción recurrente y productos curados',
                    'pl' => 'Usługi powtarzających się pudełek subskrypcyjnych i kuratorskich produktów'
                ])
            ],
            [
                'id' => 108,
                'parent_id' => 6,
                'slug' => 'print-on-demand',
                'name' => 'Print-on-Demand',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Print-on-Demand',
                    'de' => 'Print-on-Demand',
                    'es' => 'Impresión Bajo Demanda',
                    'pl' => 'Druk na Żądanie'
                ]),
                'scom' => 'Custom printing and on-demand product manufacturing',
                'scom_translations' => json_encode([
                    'en' => 'Custom printing and on-demand product manufacturing',
                    'de' => 'Individueller Druck und On-Demand-Produktherstellung',
                    'es' => 'Impresión personalizada y fabricación de productos bajo demanda',
                    'pl' => 'Niestandardowe drukowanie i produkcja produktów na żądanie'
                ])
            ],
            [
                'id' => 109,
                'parent_id' => 6,
                'slug' => 'affiliate-marketing',
                'name' => 'Affiliate Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Affiliate Marketing',
                    'de' => 'Affiliate-Marketing',
                    'es' => 'Marketing de Afiliados',
                    'pl' => 'Marketing Afiliacyjny'
                ]),
                'scom' => 'Commission-based affiliate marketing and promotion services',
                'scom_translations' => json_encode([
                    'en' => 'Commission-based affiliate marketing and promotion services',
                    'de' => 'Provisionsbasierte Affiliate-Marketing- und Promotion-Dienstleistungen',
                    'es' => 'Servicios de marketing de afiliados y promoción basados en comisiones',
                    'pl' => 'Usługi marketingu afiliacyjnego i promocji oparte na prowizjach'
                ])
            ],
            [
                'id' => 110,
                'parent_id' => 6,
                'slug' => 'ecommerce-consulting',
                'name' => 'E-commerce Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'E-commerce Consulting',
                    'de' => 'E-Commerce-Beratung',
                    'es' => 'Consultoría de Comercio Electrónico',
                    'pl' => 'Doradztwo E-commerce'
                ]),
                'scom' => 'E-commerce strategy and optimization consulting services',
                'scom_translations' => json_encode([
                    'en' => 'E-commerce strategy and optimization consulting services',
                    'de' => 'E-Commerce-Strategie und Optimierungs-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de estrategia y optimización de comercio electrónico',
                    'pl' => 'Usługi doradztwa w zakresie strategii i optymalizacji e-commerce'
                ])
            ],
            [
                'id' => 111,
                'parent_id' => 6,
                'slug' => 'marketplace-selling',
                'name' => 'Marketplace Selling',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketplace Selling',
                    'de' => 'Marktplatz-Verkauf',
                    'es' => 'Venta en Marketplace',
                    'pl' => 'Sprzedaż na Platformach'
                ]),
                'scom' => 'Third-party marketplace and multi-channel selling services',
                'scom_translations' => json_encode([
                    'en' => 'Third-party marketplace and multi-channel selling services',
                    'de' => 'Drittanbieter-Marktplatz und Multi-Channel-Verkaufsdienstleistungen',
                    'es' => 'Servicios de venta en marketplace de terceros y multicanal',
                    'pl' => 'Usługi sprzedaży na platformach zewnętrznych i wielokanałowej'
                ])
            ],
            [
                'id' => 112,
                'parent_id' => 6,
                'slug' => 'private-label-products',
                'name' => 'Private Label Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Private Label Products',
                    'de' => 'Private-Label-Produkte',
                    'es' => 'Productos de Marca Privada',
                    'pl' => 'Produkty Marki Własnej'
                ]),
                'scom' => 'Private label product development and branding services',
                'scom_translations' => json_encode([
                    'en' => 'Private label product development and branding services',
                    'de' => 'Private-Label-Produktentwicklung und Branding-Dienstleistungen',
                    'es' => 'Servicios de desarrollo de productos de marca privada y branding',
                    'pl' => 'Usługi rozwoju produktów marki własnej i brandingu'
                ])
            ],
            [
                'id' => 113,
                'parent_id' => 6,
                'slug' => 'wholesale-distribution',
                'name' => 'Wholesale Distribution',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wholesale Distribution',
                    'de' => 'Großhandelsvertrieb',
                    'es' => 'Distribución Mayorista',
                    'pl' => 'Dystrybucja Hurtowa'
                ]),
                'scom' => 'Bulk product distribution and wholesale trading services',
                'scom_translations' => json_encode([
                    'en' => 'Bulk product distribution and wholesale trading services',
                    'de' => 'Bulk-Produktvertrieb und Großhandelsdienstleistungen',
                    'es' => 'Servicios de distribución de productos a granel y comercio mayorista',
                    'pl' => 'Usługi dystrybucji produktów hurtowych i handlu hurtowego'
                ])
            ],
            [
                'id' => 114,
                'parent_id' => 6,
                'slug' => 'inventory-management',
                'name' => 'Inventory Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Inventory Management',
                    'de' => 'Bestandsmanagement',
                    'es' => 'Gestión de Inventario',
                    'pl' => 'Zarządzanie Zapasami'
                ]),
                'scom' => 'Inventory tracking and warehouse management services',
                'scom_translations' => json_encode([
                    'en' => 'Inventory tracking and warehouse management services',
                    'de' => 'Bestandsverfolgung und Lagerverwaltungsdienstleistungen',
                    'es' => 'Servicios de seguimiento de inventario y gestión de almacenes',
                    'pl' => 'Usługi śledzenia zapasów i zarządzania magazynem'
                ])
            ],
            [
                'id' => 115,
                'parent_id' => 6,
                'slug' => 'retail-technology',
                'name' => 'Retail Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Retail Technology',
                    'de' => 'Einzelhandelstechnologie',
                    'es' => 'Tecnología de Retail',
                    'pl' => 'Technologia Detaliczna'
                ]),
                'scom' => 'Retail technology solutions and point-of-sale systems',
                'scom_translations' => json_encode([
                    'en' => 'Retail technology solutions and point-of-sale systems',
                    'de' => 'Einzelhandelstechnologie-Lösungen und Kassensysteme',
                    'es' => 'Soluciones de tecnología de retail y sistemas de punto de venta',
                    'pl' => 'Rozwiązania technologii detalicznej i systemy punktów sprzedaży'
                ])
            ],
            [
                'id' => 116,
                'parent_id' => 6,
                'slug' => 'omnichannel-retail',
                'name' => 'Omnichannel Retail',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Omnichannel Retail',
                    'de' => 'Omnichannel-Einzelhandel',
                    'es' => 'Retail Omnicanal',
                    'pl' => 'Sprzedaż Wielokanałowa'
                ]),
                'scom' => 'Integrated multi-channel retail strategy and implementation',
                'scom_translations' => json_encode([
                    'en' => 'Integrated multi-channel retail strategy and implementation',
                    'de' => 'Integrierte Multi-Channel-Einzelhandelsstrategie und -implementierung',
                    'es' => 'Estrategia e implementación de retail multicanal integrado',
                    'pl' => 'Zintegrowana strategia i wdrażanie sprzedaży wielokanałowej'
                ])
            ],
            [
                'id' => 117,
                'parent_id' => 6,
                'slug' => 'others-ecommerce-retail',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other e-commerce and retail services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other e-commerce and retail services not listed above',
                    'de' => 'Andere E-Commerce- und Einzelhandelsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de comercio electrónico y retail no listados arriba',
                    'pl' => 'Inne usługi e-commerce i sprzedaży detalicznej niewymienione powyżej'
                ])
            ],
            [
                'id' => 118,
                'parent_id' => 7,
                'slug' => 'podcasting',
                'name' => 'Podcasting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Podcasting',
                    'de' => 'Podcasting',
                    'es' => 'Podcasting',
                    'pl' => 'Podcasty'
                ]),
                'scom' => 'Podcast production and audio content creation services',
                'scom_translations' => json_encode([
                    'en' => 'Podcast production and audio content creation services',
                    'de' => 'Podcast-Produktion und Audio-Content-Erstellungsdienstleistungen',
                    'es' => 'Servicios de producción de podcasts y creación de contenido de audio',
                    'pl' => 'Usługi produkcji podcastów i tworzenia treści audio'
                ])
            ],
            [
                'id' => 119,
                'parent_id' => 7,
                'slug' => 'youtube-channel',
                'name' => 'YouTube Channel',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'YouTube Channel',
                    'de' => 'YouTube-Kanal',
                    'es' => 'Canal de YouTube',
                    'pl' => 'Kanał YouTube'
                ]),
                'scom' => 'YouTube content creation and video channel management',
                'scom_translations' => json_encode([
                    'en' => 'YouTube content creation and video channel management',
                    'de' => 'YouTube-Content-Erstellung und Video-Kanal-Management',
                    'es' => 'Creación de contenido de YouTube y gestión de canales de video',
                    'pl' => 'Tworzenie treści YouTube i zarządzanie kanałami wideo'
                ])
            ],
            [
                'id' => 120,
                'parent_id' => 7,
                'slug' => 'blog-website',
                'name' => 'Blog/Website',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Blog/Website',
                    'de' => 'Blog/Website',
                    'es' => 'Blog/Sitio Web',
                    'pl' => 'Blog/Strona Internetowa'
                ]),
                'scom' => 'Blog publishing and website content creation services',
                'scom_translations' => json_encode([
                    'en' => 'Blog publishing and website content creation services',
                    'de' => 'Blog-Publishing und Website-Content-Erstellungsdienstleistungen',
                    'es' => 'Servicios de publicación de blogs y creación de contenido web',
                    'pl' => 'Usługi publikowania blogów i tworzenia treści stron internetowych'
                ])
            ],
            [
                'id' => 121,
                'parent_id' => 7,
                'slug' => 'newsletter-publication',
                'name' => 'Newsletter/Publication',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Newsletter/Publication',
                    'de' => 'Newsletter/Publikation',
                    'es' => 'Newsletter/Publicación',
                    'pl' => 'Newsletter/Publikacja'
                ]),
                'scom' => 'Newsletter and digital publication services',
                'scom_translations' => json_encode([
                    'en' => 'Newsletter and digital publication services',
                    'de' => 'Newsletter- und digitale Publikationsdienstleistungen',
                    'es' => 'Servicios de newsletter y publicaciones digitales',
                    'pl' => 'Usługi newsletterów i publikacji cyfrowych'
                ])
            ],
            [
                'id' => 122,
                'parent_id' => 7,
                'slug' => 'social-media-management',
                'name' => 'Social Media Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Media Management',
                    'de' => 'Social-Media-Management',
                    'es' => 'Gestión de Redes Sociales',
                    'pl' => 'Zarządzanie Mediami Społecznościowymi'
                ]),
                'scom' => 'Social media strategy and content management services',
                'scom_translations' => json_encode([
                    'en' => 'Social media strategy and content management services',
                    'de' => 'Social-Media-Strategie und Content-Management-Dienstleistungen',
                    'es' => 'Servicios de estrategia de redes sociales y gestión de contenido',
                    'pl' => 'Usługi strategii mediów społecznościowych i zarządzania treścią'
                ])
            ],
            [
                'id' => 123,
                'parent_id' => 7,
                'slug' => 'content-marketing-agency',
                'name' => 'Content Marketing Agency',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Marketing Agency',
                    'de' => 'Content-Marketing-Agentur',
                    'es' => 'Agencia de Marketing de Contenido',
                    'pl' => 'Agencja Marketingu Treści'
                ]),
                'scom' => 'Strategic content marketing and brand storytelling services',
                'scom_translations' => json_encode([
                    'en' => 'Strategic content marketing and brand storytelling services',
                    'de' => 'Strategische Content-Marketing- und Brand-Storytelling-Dienstleistungen',
                    'es' => 'Servicios estratégicos de marketing de contenido y narrativa de marca',
                    'pl' => 'Strategiczne usługi marketingu treści i opowiadania marki'
                ])
            ],
            [
                'id' => 124,
                'parent_id' => 7,
                'slug' => 'influencer-services',
                'name' => 'Influencer Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Influencer Services',
                    'de' => 'Influencer-Dienstleistungen',
                    'es' => 'Servicios de Influencer',
                    'pl' => 'Usługi Influencerów'
                ]),
                'scom' => 'Influencer marketing and social media personality services',
                'scom_translations' => json_encode([
                    'en' => 'Influencer marketing and social media personality services',
                    'de' => 'Influencer-Marketing und Social-Media-Persönlichkeitsdienstleistungen',
                    'es' => 'Servicios de marketing de influencers y personalidad en redes sociales',
                    'pl' => 'Usługi marketingu influencerów i osobowości mediów społecznościowych'
                ])
            ],
            [
                'id' => 125,
                'parent_id' => 7,
                'slug' => 'digital-media-production',
                'name' => 'Digital Media Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Media Production',
                    'de' => 'Digitale Medienproduktion',
                    'es' => 'Producción de Medios Digitales',
                    'pl' => 'Produkcja Mediów Cyfrowych'
                ]),
                'scom' => 'Digital media content production and multimedia services',
                'scom_translations' => json_encode([
                    'en' => 'Digital media content production and multimedia services',
                    'de' => 'Digitale Medien-Content-Produktion und Multimedia-Dienstleistungen',
                    'es' => 'Servicios de producción de contenido de medios digitales y multimedia',
                    'pl' => 'Usługi produkcji treści mediów cyfrowych i multimediów'
                ])
            ],
            [
                'id' => 126,
                'parent_id' => 7,
                'slug' => 'online-community',
                'name' => 'Online Community',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Community',
                    'de' => 'Online-Community',
                    'es' => 'Comunidad en Línea',
                    'pl' => 'Społeczność Online'
                ]),
                'scom' => 'Online community building and engagement services',
                'scom_translations' => json_encode([
                    'en' => 'Online community building and engagement services',
                    'de' => 'Online-Community-Aufbau und Engagement-Dienstleistungen',
                    'es' => 'Servicios de construcción y participación de comunidades en línea',
                    'pl' => 'Usługi budowania społeczności online i zaangażowania'
                ])
            ],
            [
                'id' => 127,
                'parent_id' => 7,
                'slug' => 'publishing-services',
                'name' => 'Publishing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Publishing Services',
                    'de' => 'Verlagsdienstleistungen',
                    'es' => 'Servicios de Publicación',
                    'pl' => 'Usługi Wydawnicze'
                ]),
                'scom' => 'Book publishing and editorial services',
                'scom_translations' => json_encode([
                    'en' => 'Book publishing and editorial services',
                    'de' => 'Buchverlag und redaktionelle Dienstleistungen',
                    'es' => 'Servicios de publicación de libros y editoriales',
                    'pl' => 'Usługi wydawnicze książek i redakcyjne'
                ])
            ],
            [
                'id' => 128,
                'parent_id' => 7,
                'slug' => 'streaming-services',
                'name' => 'Streaming Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Streaming Services',
                    'de' => 'Streaming-Dienstleistungen',
                    'es' => 'Servicios de Streaming',
                    'pl' => 'Usługi Streamingowe'
                ]),
                'scom' => 'Live streaming and video broadcasting services',
                'scom_translations' => json_encode([
                    'en' => 'Live streaming and video broadcasting services',
                    'de' => 'Live-Streaming und Video-Broadcasting-Dienstleistungen',
                    'es' => 'Servicios de transmisión en vivo y difusión de video',
                    'pl' => 'Usługi transmisji na żywo i nadawania wideo'
                ])
            ],
            [
                'id' => 129,
                'parent_id' => 7,
                'slug' => 'audio-production',
                'name' => 'Audio Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Audio Production',
                    'de' => 'Audioproduktion',
                    'es' => 'Producción de Audio',
                    'pl' => 'Produkcja Audio'
                ]),
                'scom' => 'Professional audio recording and production services',
                'scom_translations' => json_encode([
                    'en' => 'Professional audio recording and production services',
                    'de' => 'Professionelle Audioaufnahme- und Produktionsdienstleistungen',
                    'es' => 'Servicios profesionales de grabación y producción de audio',
                    'pl' => 'Profesjonalne usługi nagrywania i produkcji audio'
                ])
            ],
            [
                'id' => 130,
                'parent_id' => 7,
                'slug' => 'documentary-production',
                'name' => 'Documentary Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Documentary Production',
                    'de' => 'Dokumentarfilmproduktion',
                    'es' => 'Producción de Documentales',
                    'pl' => 'Produkcja Dokumentalna'
                ]),
                'scom' => 'Documentary film and factual content production services',
                'scom_translations' => json_encode([
                    'en' => 'Documentary film and factual content production services',
                    'de' => 'Dokumentarfilm- und Sachinhalt-Produktionsdienstleistungen',
                    'es' => 'Servicios de producción de documentales y contenido factual',
                    'pl' => 'Usługi produkcji filmów dokumentalnych i treści faktograficznych'
                ])
            ],
            [
                'id' => 131,
                'parent_id' => 7,
                'slug' => 'digital-magazine',
                'name' => 'Digital Magazine',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Magazine',
                    'de' => 'Digitales Magazin',
                    'es' => 'Revista Digital',
                    'pl' => 'Magazyn Cyfrowy'
                ]),
                'scom' => 'Digital magazine publishing and editorial content services',
                'scom_translations' => json_encode([
                    'en' => 'Digital magazine publishing and editorial content services',
                    'de' => 'Digitale Magazinveröffentlichung und redaktionelle Inhaltsdienstleistungen',
                    'es' => 'Servicios de publicación de revistas digitales y contenido editorial',
                    'pl' => 'Usługi wydawania magazynów cyfrowych i treści redakcyjnych'
                ])
            ],
            [
                'id' => 132,
                'parent_id' => 7,
                'slug' => 'content-syndication',
                'name' => 'Content Syndication',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Syndication',
                    'de' => 'Content-Syndikation',
                    'es' => 'Sindicación de Contenido',
                    'pl' => 'Syndykacja Treści'
                ]),
                'scom' => 'Content distribution and syndication network services',
                'scom_translations' => json_encode([
                    'en' => 'Content distribution and syndication network services',
                    'de' => 'Content-Verteilung und Syndikationsnetzwerk-Dienstleistungen',
                    'es' => 'Servicios de distribución de contenido y redes de sindicación',
                    'pl' => 'Usługi dystrybucji treści i sieci syndykacji'
                ])
            ],
            [
                'id' => 133,
                'parent_id' => 7,
                'slug' => 'others-media-content',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other media and content services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other media and content services not listed above',
                    'de' => 'Andere Medien- und Inhaltsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de medios y contenido no listados arriba',
                    'pl' => 'Inne usługi mediów i treści niewymienione powyżej'
                ])
            ],
            [
                'id' => 134,
                'parent_id' => 8,
                'slug' => 'real-estate-investment',
                'name' => 'Real Estate Investment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Investment',
                    'de' => 'Immobilieninvestition',
                    'es' => 'Inversión Inmobiliaria',
                    'pl' => 'Inwestycje Nieruchomościowe'
                ]),
                'scom' => 'Property investment and real estate portfolio management',
                'scom_translations' => json_encode([
                    'en' => 'Property investment and real estate portfolio management',
                    'de' => 'Immobilieninvestition und Immobilienportfolio-Management',
                    'es' => 'Inversión en propiedades y gestión de portafolio inmobiliario',
                    'pl' => 'Inwestycje w nieruchomości i zarządzanie portfelem nieruchomości'
                ])
            ],
            [
                'id' => 135,
                'parent_id' => 8,
                'slug' => 'property-management',
                'name' => 'Property Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Property Management',
                    'de' => 'Immobilienverwaltung',
                    'es' => 'Gestión de Propiedades',
                    'pl' => 'Zarządzanie Nieruchomościami'
                ]),
                'scom' => 'Residential and commercial property management services',
                'scom_translations' => json_encode([
                    'en' => 'Residential and commercial property management services',
                    'de' => 'Wohn- und Gewerbeimmobilien-Verwaltungsdienstleistungen',
                    'es' => 'Servicios de gestión de propiedades residenciales y comerciales',
                    'pl' => 'Usługi zarządzania nieruchomościami mieszkalnymi i komercyjnymi'
                ])
            ],
            [
                'id' => 136,
                'parent_id' => 8,
                'slug' => 'real-estate-development',
                'name' => 'Real Estate Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Development',
                    'de' => 'Immobilienentwicklung',
                    'es' => 'Desarrollo Inmobiliario',
                    'pl' => 'Rozwój Nieruchomości'
                ]),
                'scom' => 'Property development and construction project management',
                'scom_translations' => json_encode([
                    'en' => 'Property development and construction project management',
                    'de' => 'Immobilienentwicklung und Bauprojektmanagement',
                    'es' => 'Desarrollo de propiedades y gestión de proyectos de construcción',
                    'pl' => 'Rozwój nieruchomości i zarządzanie projektami budowlanymi'
                ])
            ],
            [
                'id' => 137,
                'parent_id' => 8,
                'slug' => 'reit-investment',
                'name' => 'REIT Investment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'REIT Investment',
                    'de' => 'REIT-Investition',
                    'es' => 'Inversión REIT',
                    'pl' => 'Inwestycje REIT'
                ]),
                'scom' => 'Real Estate Investment Trust portfolio and advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Real Estate Investment Trust portfolio and advisory services',
                    'de' => 'Real Estate Investment Trust Portfolio- und Beratungsdienstleistungen',
                    'es' => 'Servicios de portafolio y asesoría de Real Estate Investment Trust',
                    'pl' => 'Usługi portfela i doradztwa Real Estate Investment Trust'
                ])
            ],
            [
                'id' => 138,
                'parent_id' => 8,
                'slug' => 'rental-properties',
                'name' => 'Rental Properties',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Rental Properties',
                    'de' => 'Mietimmobilien',
                    'es' => 'Propiedades de Alquiler',
                    'pl' => 'Nieruchomości na Wynajem'
                ]),
                'scom' => 'Rental property investment and management services',
                'scom_translations' => json_encode([
                    'en' => 'Rental property investment and management services',
                    'de' => 'Mietimmobilien-Investitions- und Verwaltungsdienstleistungen',
                    'es' => 'Servicios de inversión y gestión de propiedades de alquiler',
                    'pl' => 'Usługi inwestycji i zarządzania nieruchomościami na wynajem'
                ])
            ],
            [
                'id' => 139,
                'parent_id' => 8,
                'slug' => 'real-estate-flipping',
                'name' => 'Real Estate Flipping',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Flipping',
                    'de' => 'Immobilien-Flipping',
                    'es' => 'Renovación y Reventa Inmobiliaria',
                    'pl' => 'Odnawianie i Odsprzedaż Nieruchomości'
                ]),
                'scom' => 'Property renovation and quick resale investment strategy',
                'scom_translations' => json_encode([
                    'en' => 'Property renovation and quick resale investment strategy',
                    'de' => 'Immobilienrenovierung und schnelle Wiederverkaufs-Investitionsstrategie',
                    'es' => 'Estrategia de inversión de renovación de propiedades y reventa rápida',
                    'pl' => 'Strategia inwestycyjna renowacji nieruchomości i szybkiej odsprzedaży'
                ])
            ],
            [
                'id' => 140,
                'parent_id' => 8,
                'slug' => 'commercial-real-estate',
                'name' => 'Commercial Real Estate',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Commercial Real Estate',
                    'de' => 'Gewerbeimmobilien',
                    'es' => 'Bienes Raíces Comerciales',
                    'pl' => 'Nieruchomości Komercyjne'
                ]),
                'scom' => 'Commercial property investment and brokerage services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial property investment and brokerage services',
                    'de' => 'Gewerbeimmobilien-Investitions- und Maklerdienstleistungen',
                    'es' => 'Servicios de inversión y corretaje de propiedades comerciales',
                    'pl' => 'Usługi inwestycji i pośrednictwa w nieruchomościach komercyjnych'
                ])
            ],
            [
                'id' => 141,
                'parent_id' => 8,
                'slug' => 'real-estate-syndication',
                'name' => 'Real Estate Syndication',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Syndication',
                    'de' => 'Immobilien-Syndikation',
                    'es' => 'Sindicación Inmobiliaria',
                    'pl' => 'Syndykacja Nieruchomości'
                ]),
                'scom' => 'Group investment and real estate syndication services',
                'scom_translations' => json_encode([
                    'en' => 'Group investment and real estate syndication services',
                    'de' => 'Gruppeninvestitions- und Immobilien-Syndikationsdienstleistungen',
                    'es' => 'Servicios de inversión grupal y sindicación inmobiliaria',
                    'pl' => 'Usługi inwestycji grupowych i syndykacji nieruchomości'
                ])
            ],
            [
                'id' => 142,
                'parent_id' => 8,
                'slug' => 'property-consulting',
                'name' => 'Property Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Property Consulting',
                    'de' => 'Immobilienberatung',
                    'es' => 'Consultoría de Propiedades',
                    'pl' => 'Doradztwo Nieruchomościowe'
                ]),
                'scom' => 'Real estate advisory and investment consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Real estate advisory and investment consulting services',
                    'de' => 'Immobilienberatung und Investitionsberatungsdienstleistungen',
                    'es' => 'Servicios de asesoría inmobiliaria y consultoría de inversiones',
                    'pl' => 'Usługi doradztwa nieruchomościowego i konsultacji inwestycyjnych'
                ])
            ],
            [
                'id' => 143,
                'parent_id' => 8,
                'slug' => 'real-estate-technology',
                'name' => 'Real Estate Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Technology',
                    'de' => 'Immobilientechnologie',
                    'es' => 'Tecnología Inmobiliaria',
                    'pl' => 'Technologia Nieruchomości'
                ]),
                'scom' => 'PropTech solutions and real estate technology services',
                'scom_translations' => json_encode([
                    'en' => 'PropTech solutions and real estate technology services',
                    'de' => 'PropTech-Lösungen und Immobilientechnologie-Dienstleistungen',
                    'es' => 'Soluciones PropTech y servicios de tecnología inmobiliaria',
                    'pl' => 'Rozwiązania PropTech i usługi technologii nieruchomości'
                ])
            ],
            [
                'id' => 144,
                'parent_id' => 8,
                'slug' => 'real-estate-crowdfunding',
                'name' => 'Real Estate Crowdfunding',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Crowdfunding',
                    'de' => 'Immobilien-Crowdfunding',
                    'es' => 'Crowdfunding Inmobiliario',
                    'pl' => 'Crowdfunding Nieruchomości'
                ]),
                'scom' => 'Crowdfunded real estate investment platform services',
                'scom_translations' => json_encode([
                    'en' => 'Crowdfunded real estate investment platform services',
                    'de' => 'Crowdfinanzierte Immobilieninvestitions-Plattformdienstleistungen',
                    'es' => 'Servicios de plataforma de inversión inmobiliaria crowdfunding',
                    'pl' => 'Usługi platformy inwestycji nieruchomościowych crowdfunding'
                ])
            ],
            [
                'id' => 145,
                'parent_id' => 8,
                'slug' => 'real-estate-appraisal',
                'name' => 'Real Estate Appraisal',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Appraisal',
                    'de' => 'Immobilienbewertung',
                    'es' => 'Tasación Inmobiliaria',
                    'pl' => 'Wycena Nieruchomości'
                ]),
                'scom' => 'Property valuation and real estate appraisal services',
                'scom_translations' => json_encode([
                    'en' => 'Property valuation and real estate appraisal services',
                    'de' => 'Immobilienbewertung und Immobilienschätzungsdienstleistungen',
                    'es' => 'Servicios de valuación de propiedades y tasación inmobiliaria',
                    'pl' => 'Usługi wyceny nieruchomości i rzeczoznawstwa majątkowego'
                ])
            ],
            [
                'id' => 146,
                'parent_id' => 8,
                'slug' => 'vacation-rental-investment',
                'name' => 'Vacation Rental Investment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Vacation Rental Investment',
                    'de' => 'Ferienvermietungs-Investition',
                    'es' => 'Inversión en Alquiler Vacacional',
                    'pl' => 'Inwestycje w Wynajem Wakacyjny'
                ]),
                'scom' => 'Short-term rental property investment and management',
                'scom_translations' => json_encode([
                    'en' => 'Short-term rental property investment and management',
                    'de' => 'Kurzzeit-Mietimmobilien-Investition und -Verwaltung',
                    'es' => 'Inversión y gestión de propiedades de alquiler a corto plazo',
                    'pl' => 'Inwestycje i zarządzanie nieruchomościami na wynajem krótkoterminowy'
                ])
            ],
            [
                'id' => 147,
                'parent_id' => 8,
                'slug' => 'real-estate-finance',
                'name' => 'Real Estate Finance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate Finance',
                    'de' => 'Immobilienfinanzierung',
                    'es' => 'Financiamiento Inmobiliario',
                    'pl' => 'Finansowanie Nieruchomości'
                ]),
                'scom' => 'Property financing and real estate lending services',
                'scom_translations' => json_encode([
                    'en' => 'Property financing and real estate lending services',
                    'de' => 'Immobilienfinanzierung und Immobilienkreditdienstleistungen',
                    'es' => 'Servicios de financiamiento de propiedades y préstamos inmobiliarios',
                    'pl' => 'Usługi finansowania nieruchomości i kredytowania nieruchomości'
                ])
            ],
            [
                'id' => 148,
                'parent_id' => 8,
                'slug' => 'others-real-estate-investment',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other real estate and investment services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other real estate and investment services not listed above',
                    'de' => 'Andere Immobilien- und Investitionsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de bienes raíces e inversión no listados arriba',
                    'pl' => 'Inne usługi nieruchomościowe i inwestycyjne niewymienione powyżej'
                ])
            ],
            [
                'id' => 149,
                'parent_id' => 9,
                'slug' => 'investment-management',
                'name' => 'Investment Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investment Management',
                    'de' => 'Investmentmanagement',
                    'es' => 'Gestión de Inversiones',
                    'pl' => 'Zarządzanie Inwestycjami'
                ]),
                'scom' => 'Professional investment portfolio management services',
                'scom_translations' => json_encode([
                    'en' => 'Professional investment portfolio management services',
                    'de' => 'Professionelle Investmentportfolio-Managementdienstleistungen',
                    'es' => 'Servicios profesionales de gestión de portafolio de inversiones',
                    'pl' => 'Profesjonalne usługi zarządzania portfelem inwestycyjnym'
                ])
            ],
            [
                'id' => 150,
                'parent_id' => 9,
                'slug' => 'trading-services',
                'name' => 'Trading Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trading Services',
                    'de' => 'Handelsdienstleistungen',
                    'es' => 'Servicios de Trading',
                    'pl' => 'Usługi Tradingowe'
                ]),
                'scom' => 'Securities trading and brokerage services',
                'scom_translations' => json_encode([
                    'en' => 'Securities trading and brokerage services',
                    'de' => 'Wertpapierhandel und Maklerdienstleistungen',
                    'es' => 'Servicios de trading de valores y corretaje',
                    'pl' => 'Usługi handlu papierami wartościowymi i brokerskie'
                ])
            ],
            [
                'id' => 151,
                'parent_id' => 9,
                'slug' => 'cryptocurrency-trading',
                'name' => 'Cryptocurrency Trading',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cryptocurrency Trading',
                    'de' => 'Kryptowährungshandel',
                    'es' => 'Trading de Criptomonedas',
                    'pl' => 'Handel Kryptowalutami'
                ]),
                'scom' => 'Digital currency trading and crypto investment services',
                'scom_translations' => json_encode([
                    'en' => 'Digital currency trading and crypto investment services',
                    'de' => 'Digitaler Währungshandel und Krypto-Investitionsdienstleistungen',
                    'es' => 'Servicios de trading de moneda digital e inversión en criptomonedas',
                    'pl' => 'Usługi handlu walutami cyfrowymi i inwestycji w kryptowaluty'
                ])
            ],
            [
                'id' => 152,
                'parent_id' => 9,
                'slug' => 'financial-education',
                'name' => 'Financial Education',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Education',
                    'de' => 'Finanzbildung',
                    'es' => 'Educación Financiera',
                    'pl' => 'Edukacja Finansowa'
                ]),
                'scom' => 'Financial literacy and investment education services',
                'scom_translations' => json_encode([
                    'en' => 'Financial literacy and investment education services',
                    'de' => 'Finanzbildung und Investitions-Bildungsdienstleistungen',
                    'es' => 'Servicios de alfabetización financiera y educación en inversiones',
                    'pl' => 'Usługi edukacji finansowej i inwestycyjnej'
                ])
            ],
            [
                'id' => 153,
                'parent_id' => 9,
                'slug' => 'wealth-management',
                'name' => 'Wealth Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wealth Management',
                    'de' => 'Vermögensverwaltung',
                    'es' => 'Gestión de Patrimonio',
                    'pl' => 'Zarządzanie Majątkiem'
                ]),
                'scom' => 'High net worth wealth management and advisory services',
                'scom_translations' => json_encode([
                    'en' => 'High net worth wealth management and advisory services',
                    'de' => 'Vermögensverwaltung und Beratungsdienstleistungen für wohlhabende Kunden',
                    'es' => 'Servicios de gestión de patrimonio y asesoría para clientes de alto valor neto',
                    'pl' => 'Usługi zarządzania majątkiem i doradztwa dla klientów o wysokiej wartości netto'
                ])
            ],
            [
                'id' => 154,
                'parent_id' => 9,
                'slug' => 'insurance-services',
                'name' => 'Insurance Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Insurance Services',
                    'de' => 'Versicherungsdienstleistungen',
                    'es' => 'Servicios de Seguros',
                    'pl' => 'Usługi Ubezpieczeniowe'
                ]),
                'scom' => 'Insurance products and risk management services',
                'scom_translations' => json_encode([
                    'en' => 'Insurance products and risk management services',
                    'de' => 'Versicherungsprodukte und Risikomanagement-Dienstleistungen',
                    'es' => 'Productos de seguros y servicios de gestión de riesgos',
                    'pl' => 'Produkty ubezpieczeniowe i usługi zarządzania ryzykiem'
                ])
            ],
            [
                'id' => 155,
                'parent_id' => 9,
                'slug' => 'lending-services',
                'name' => 'Lending Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lending Services',
                    'de' => 'Kreditdienstleistungen',
                    'es' => 'Servicios de Préstamos',
                    'pl' => 'Usługi Kredytowe'
                ]),
                'scom' => 'Personal and business lending and credit services',
                'scom_translations' => json_encode([
                    'en' => 'Personal and business lending and credit services',
                    'de' => 'Persönliche und geschäftliche Kredit- und Darlehensdienstleistungen',
                    'es' => 'Servicios de préstamos y crédito personal y empresarial',
                    'pl' => 'Usługi kredytowe i pożyczkowe osobiste i biznesowe'
                ])
            ],
            [
                'id' => 156,
                'parent_id' => 9,
                'slug' => 'payment-processing',
                'name' => 'Payment Processing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Payment Processing',
                    'de' => 'Zahlungsabwicklung',
                    'es' => 'Procesamiento de Pagos',
                    'pl' => 'Przetwarzanie Płatności'
                ]),
                'scom' => 'Digital payment solutions and transaction processing services',
                'scom_translations' => json_encode([
                    'en' => 'Digital payment solutions and transaction processing services',
                    'de' => 'Digitale Zahlungslösungen und Transaktionsverarbeitungsdienstleistungen',
                    'es' => 'Soluciones de pago digital y servicios de procesamiento de transacciones',
                    'pl' => 'Rozwiązania płatności cyfrowych i usługi przetwarzania transakcji'
                ])
            ],
            [
                'id' => 157,
                'parent_id' => 9,
                'slug' => 'financial-software',
                'name' => 'Financial Software',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Software',
                    'de' => 'Finanzsoftware',
                    'es' => 'Software Financiero',
                    'pl' => 'Oprogramowanie Finansowe'
                ]),
                'scom' => 'Financial technology and software development services',
                'scom_translations' => json_encode([
                    'en' => 'Financial technology and software development services',
                    'de' => 'Finanztechnologie und Software-Entwicklungsdienstleistungen',
                    'es' => 'Servicios de tecnología financiera y desarrollo de software',
                    'pl' => 'Usługi technologii finansowych i rozwoju oprogramowania'
                ])
            ],
            [
                'id' => 158,
                'parent_id' => 9,
                'slug' => 'investment-research',
                'name' => 'Investment Research',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investment Research',
                    'de' => 'Investmentforschung',
                    'es' => 'Investigación de Inversiones',
                    'pl' => 'Badania Inwestycyjne'
                ]),
                'scom' => 'Market analysis and investment research services',
                'scom_translations' => json_encode([
                    'en' => 'Market analysis and investment research services',
                    'de' => 'Marktanalyse und Investmentforschungsdienstleistungen',
                    'es' => 'Servicios de análisis de mercado e investigación de inversiones',
                    'pl' => 'Usługi analizy rynku i badań inwestycyjnych'
                ])
            ],
            [
                'id' => 159,
                'parent_id' => 9,
                'slug' => 'financial-advisory',
                'name' => 'Financial Advisory',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Advisory',
                    'de' => 'Finanzberatung',
                    'es' => 'Asesoría Financiera',
                    'pl' => 'Doradztwo Finansowe'
                ]),
                'scom' => 'Personal and corporate financial advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Personal and corporate financial advisory services',
                    'de' => 'Persönliche und Unternehmens-Finanzberatungsdienstleistungen',
                    'es' => 'Servicios de asesoría financiera personal y corporativa',
                    'pl' => 'Usługi doradztwa finansowego osobistego i korporacyjnego'
                ])
            ],
            [
                'id' => 160,
                'parent_id' => 9,
                'slug' => 'robo-advisory',
                'name' => 'Robo-Advisory',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Robo-Advisory',
                    'de' => 'Robo-Beratung',
                    'es' => 'Asesoría Robótica',
                    'pl' => 'Doradztwo Robotyczne'
                ]),
                'scom' => 'Automated investment advisory and portfolio management',
                'scom_translations' => json_encode([
                    'en' => 'Automated investment advisory and portfolio management',
                    'de' => 'Automatisierte Investmentberatung und Portfoliomanagement',
                    'es' => 'Asesoría de inversión automatizada y gestión de portafolio',
                    'pl' => 'Zautomatyzowane doradztwo inwestycyjne i zarządzanie portfelem'
                ])
            ],
            [
                'id' => 161,
                'parent_id' => 9,
                'slug' => 'crowd-investing',
                'name' => 'Crowd Investing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Crowd Investing',
                    'de' => 'Crowd-Investing',
                    'es' => 'Inversión Colaborativa',
                    'pl' => 'Inwestowanie Społecznościowe'
                ]),
                'scom' => 'Crowdfunding and peer-to-peer investment platforms',
                'scom_translations' => json_encode([
                    'en' => 'Crowdfunding and peer-to-peer investment platforms',
                    'de' => 'Crowdfunding und Peer-to-Peer-Investitionsplattformen',
                    'es' => 'Plataformas de crowdfunding e inversión peer-to-peer',
                    'pl' => 'Platformy crowdfundingu i inwestycji peer-to-peer'
                ])
            ],
            [
                'id' => 162,
                'parent_id' => 9,
                'slug' => 'tax-services',
                'name' => 'Tax Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tax Services',
                    'de' => 'Steuerdienstleistungen',
                    'es' => 'Servicios Fiscales',
                    'pl' => 'Usługi Podatkowe'
                ]),
                'scom' => 'Tax preparation and planning advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Tax preparation and planning advisory services',
                    'de' => 'Steuervorbereitung und Planungsberatungsdienstleistungen',
                    'es' => 'Servicios de preparación fiscal y asesoría de planificación',
                    'pl' => 'Usługi przygotowania podatków i doradztwa planowania podatkowego'
                ])
            ],
            [
                'id' => 163,
                'parent_id' => 9,
                'slug' => 'others-financial-services',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other financial services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other financial services not listed above',
                    'de' => 'Andere Finanzdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios financieros no listados arriba',
                    'pl' => 'Inne usługi finansowe niewymienione powyżej'
                ])
            ],
            [
                'id' => 164,
                'parent_id' => 10,
                'slug' => 'fitness-coaching',
                'name' => 'Fitness Coaching',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fitness Coaching',
                    'de' => 'Fitness-Coaching',
                    'es' => 'Entrenamiento Físico',
                    'pl' => 'Coaching Fitness'
                ]),
                'scom' => 'Personal fitness training and coaching services',
                'scom_translations' => json_encode([
                    'en' => 'Personal fitness training and coaching services',
                    'de' => 'Persönliche Fitnesstraining- und Coaching-Dienstleistungen',
                    'es' => 'Servicios de entrenamiento personal y coaching de fitness',
                    'pl' => 'Usługi personalnego treningu fitness i coachingu'
                ])
            ],
            [
                'id' => 165,
                'parent_id' => 10,
                'slug' => 'nutrition-consulting',
                'name' => 'Nutrition Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Nutrition Consulting',
                    'de' => 'Ernährungsberatung',
                    'es' => 'Consultoría Nutricional',
                    'pl' => 'Doradztwo Żywieniowe'
                ]),
                'scom' => 'Nutritional guidance and dietary consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Nutritional guidance and dietary consulting services',
                    'de' => 'Ernährungsberatung und diätetische Beratungsdienstleistungen',
                    'es' => 'Servicios de orientación nutricional y consultoría dietética',
                    'pl' => 'Usługi poradnictwa żywieniowego i doradztwa dietetycznego'
                ])
            ],
            [
                'id' => 166,
                'parent_id' => 10,
                'slug' => 'wellness-programs',
                'name' => 'Wellness Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wellness Programs',
                    'de' => 'Wellness-Programme',
                    'es' => 'Programas de Bienestar',
                    'pl' => 'Programy Wellness'
                ]),
                'scom' => 'Comprehensive wellness and lifestyle improvement programs',
                'scom_translations' => json_encode([
                    'en' => 'Comprehensive wellness and lifestyle improvement programs',
                    'de' => 'Umfassende Wellness- und Lifestyle-Verbesserungsprogramme',
                    'es' => 'Programas integrales de bienestar y mejora del estilo de vida',
                    'pl' => 'Kompleksowe programy wellness i poprawy stylu życia'
                ])
            ],
            [
                'id' => 167,
                'parent_id' => 10,
                'slug' => 'mental-health-services',
                'name' => 'Mental Health Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mental Health Services',
                    'de' => 'Psychische Gesundheitsdienste',
                    'es' => 'Servicios de Salud Mental',
                    'pl' => 'Usługi Zdrowia Psychicznego'
                ]),
                'scom' => 'Mental health support and psychological wellness services',
                'scom_translations' => json_encode([
                    'en' => 'Mental health support and psychological wellness services',
                    'de' => 'Unterstützung der psychischen Gesundheit und psychologische Wellness-Dienstleistungen',
                    'es' => 'Servicios de apoyo a la salud mental y bienestar psicológico',
                    'pl' => 'Usługi wsparcia zdrowia psychicznego i dobrostanu psychologicznego'
                ])
            ],
            [
                'id' => 168,
                'parent_id' => 10,
                'slug' => 'life-coaching',
                'name' => 'Life Coaching',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Life Coaching',
                    'de' => 'Life-Coaching',
                    'es' => 'Coaching de Vida',
                    'pl' => 'Coaching Życiowy'
                ]),
                'scom' => 'Personal development and life coaching services',
                'scom_translations' => json_encode([
                    'en' => 'Personal development and life coaching services',
                    'de' => 'Persönlichkeitsentwicklung und Life-Coaching-Dienstleistungen',
                    'es' => 'Servicios de desarrollo personal y coaching de vida',
                    'pl' => 'Usługi rozwoju osobistego i coachingu życiowego'
                ])
            ],
            [
                'id' => 169,
                'parent_id' => 10,
                'slug' => 'personal-training',
                'name' => 'Personal Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Training',
                    'de' => 'Personal Training',
                    'es' => 'Entrenamiento Personal',
                    'pl' => 'Trening Personalny'
                ]),
                'scom' => 'One-on-one fitness training and exercise instruction',
                'scom_translations' => json_encode([
                    'en' => 'One-on-one fitness training and exercise instruction',
                    'de' => 'Individuelles Fitnesstraining und Übungsanleitung',
                    'es' => 'Entrenamiento físico individual e instrucción de ejercicios',
                    'pl' => 'Indywidualny trening fitness i instruktaż ćwiczeń'
                ])
            ],
            [
                'id' => 170,
                'parent_id' => 10,
                'slug' => 'yoga-meditation-instruction',
                'name' => 'Yoga/Meditation Instruction',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Yoga/Meditation Instruction',
                    'de' => 'Yoga-/Meditations-Unterricht',
                    'es' => 'Instrucción de Yoga/Meditación',
                    'pl' => 'Instruktaż Jogi/Medytacji'
                ]),
                'scom' => 'Yoga classes and meditation instruction services',
                'scom_translations' => json_encode([
                    'en' => 'Yoga classes and meditation instruction services',
                    'de' => 'Yoga-Kurse und Meditations-Unterrichtsdienstleistungen',
                    'es' => 'Servicios de clases de yoga e instrucción de meditación',
                    'pl' => 'Usługi zajęć jogi i instruktażu medytacji'
                ])
            ],
            [
                'id' => 171,
                'parent_id' => 10,
                'slug' => 'health-products',
                'name' => 'Health Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Health Products',
                    'de' => 'Gesundheitsprodukte',
                    'es' => 'Productos de Salud',
                    'pl' => 'Produkty Zdrowotne'
                ]),
                'scom' => 'Health supplements and wellness product sales',
                'scom_translations' => json_encode([
                    'en' => 'Health supplements and wellness product sales',
                    'de' => 'Nahrungsergänzungsmittel und Wellness-Produktverkauf',
                    'es' => 'Venta de suplementos de salud y productos de bienestar',
                    'pl' => 'Sprzedaż suplementów zdrowotnych i produktów wellness'
                ])
            ],
            [
                'id' => 172,
                'parent_id' => 10,
                'slug' => 'wellness-apps',
                'name' => 'Wellness Apps',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wellness Apps',
                    'de' => 'Wellness-Apps',
                    'es' => 'Aplicaciones de Bienestar',
                    'pl' => 'Aplikacje Wellness'
                ]),
                'scom' => 'Health and wellness mobile application development',
                'scom_translations' => json_encode([
                    'en' => 'Health and wellness mobile application development',
                    'de' => 'Entwicklung von Gesundheits- und Wellness-Mobile-Anwendungen',
                    'es' => 'Desarrollo de aplicaciones móviles de salud y bienestar',
                    'pl' => 'Rozwój aplikacji mobilnych zdrowia i wellness'
                ])
            ],
            [
                'id' => 173,
                'parent_id' => 10,
                'slug' => 'therapeutic-services',
                'name' => 'Therapeutic Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Therapeutic Services',
                    'de' => 'Therapeutische Dienstleistungen',
                    'es' => 'Servicios Terapéuticos',
                    'pl' => 'Usługi Terapeutyczne'
                ]),
                'scom' => 'Alternative therapy and holistic healing services',
                'scom_translations' => json_encode([
                    'en' => 'Alternative therapy and holistic healing services',
                    'de' => 'Alternative Therapie und ganzheitliche Heilungsdienstleistungen',
                    'es' => 'Servicios de terapia alternativa y sanación holística',
                    'pl' => 'Usługi terapii alternatywnej i uzdrawiania holistycznego'
                ])
            ],
            [
                'id' => 174,
                'parent_id' => 10,
                'slug' => 'health-tech',
                'name' => 'Health Tech',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Health Tech',
                    'de' => 'Health Tech',
                    'es' => 'Tecnología de Salud',
                    'pl' => 'Technologie Zdrowotne'
                ]),
                'scom' => 'Healthcare technology and digital health solutions',
                'scom_translations' => json_encode([
                    'en' => 'Healthcare technology and digital health solutions',
                    'de' => 'Gesundheitstechnologie und digitale Gesundheitslösungen',
                    'es' => 'Tecnología sanitaria y soluciones de salud digital',
                    'pl' => 'Technologia opieki zdrowotnej i rozwiązania zdrowia cyfrowego'
                ])
            ],
            [
                'id' => 175,
                'parent_id' => 10,
                'slug' => 'weight-management',
                'name' => 'Weight Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Weight Management',
                    'de' => 'Gewichtsmanagement',
                    'es' => 'Gestión del Peso',
                    'pl' => 'Zarządzanie Wagą'
                ]),
                'scom' => 'Weight loss and healthy weight management programs',
                'scom_translations' => json_encode([
                    'en' => 'Weight loss and healthy weight management programs',
                    'de' => 'Gewichtsverlust und gesunde Gewichtsmanagement-Programme',
                    'es' => 'Programas de pérdida de peso y gestión saludable del peso',
                    'pl' => 'Programy utraty wagi i zdrowego zarządzania wagą'
                ])
            ],
            [
                'id' => 176,
                'parent_id' => 10,
                'slug' => 'corporate-wellness',
                'name' => 'Corporate Wellness',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Wellness',
                    'de' => 'Betriebliches Wellness',
                    'es' => 'Bienestar Corporativo',
                    'pl' => 'Wellness Korporacyjny'
                ]),
                'scom' => 'Employee wellness and corporate health programs',
                'scom_translations' => json_encode([
                    'en' => 'Employee wellness and corporate health programs',
                    'de' => 'Mitarbeiter-Wellness und betriebliche Gesundheitsprogramme',
                    'es' => 'Programas de bienestar de empleados y salud corporativa',
                    'pl' => 'Programy wellness pracowników i zdrowia korporacyjnego'
                ])
            ],
            [
                'id' => 177,
                'parent_id' => 10,
                'slug' => 'spa-wellness-centers',
                'name' => 'Spa & Wellness Centers',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Spa & Wellness Centers',
                    'de' => 'Spa- und Wellness-Zentren',
                    'es' => 'Centros de Spa y Bienestar',
                    'pl' => 'Centra Spa i Wellness'
                ]),
                'scom' => 'Spa services and wellness center operations',
                'scom_translations' => json_encode([
                    'en' => 'Spa services and wellness center operations',
                    'de' => 'Spa-Dienstleistungen und Wellness-Zentrum-Betrieb',
                    'es' => 'Servicios de spa y operaciones de centros de bienestar',
                    'pl' => 'Usługi spa i działalność centrów wellness'
                ])
            ],
            [
                'id' => 178,
                'parent_id' => 10,
                'slug' => 'others-health-wellness',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other health and wellness services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other health and wellness services not listed above',
                    'de' => 'Andere Gesundheits- und Wellness-Dienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de salud y bienestar no listados arriba',
                    'pl' => 'Inne usługi zdrowia i wellness niewymienione powyżej'
                ])
            ],
            [
                'id' => 179,
                'parent_id' => 11,
                'slug' => 'restaurant-cafe',
                'name' => 'Restaurant/Cafe',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Restaurant/Cafe',
                    'de' => 'Restaurant/Café',
                    'es' => 'Restaurante/Café',
                    'pl' => 'Restauracja/Kawiarnia'
                ]),
                'scom' => 'Restaurant and cafe dining establishment services',
                'scom_translations' => json_encode([
                    'en' => 'Restaurant and cafe dining establishment services',
                    'de' => 'Restaurant- und Café-Gastronomie-Dienstleistungen',
                    'es' => 'Servicios de establecimientos gastronómicos de restaurante y café',
                    'pl' => 'Usługi gastronomiczne restauracji i kawiarni'
                ])
            ],
            [
                'id' => 180,
                'parent_id' => 11,
                'slug' => 'food-truck',
                'name' => 'Food Truck',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Truck',
                    'de' => 'Food Truck',
                    'es' => 'Food Truck',
                    'pl' => 'Food Truck'
                ]),
                'scom' => 'Mobile food service and food truck business',
                'scom_translations' => json_encode([
                    'en' => 'Mobile food service and food truck business',
                    'de' => 'Mobile Gastronomie und Food-Truck-Geschäft',
                    'es' => 'Negocio de servicio de comida móvil y food truck',
                    'pl' => 'Mobilny serwis gastronomiczny i biznes food trucków'
                ])
            ],
            [
                'id' => 181,
                'parent_id' => 11,
                'slug' => 'catering-services',
                'name' => 'Catering Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Catering Services',
                    'de' => 'Catering-Dienstleistungen',
                    'es' => 'Servicios de Catering',
                    'pl' => 'Usługi Cateringowe'
                ]),
                'scom' => 'Event catering and food service delivery',
                'scom_translations' => json_encode([
                    'en' => 'Event catering and food service delivery',
                    'de' => 'Event-Catering und Gastronomie-Lieferservice',
                    'es' => 'Catering de eventos y entrega de servicios de comida',
                    'pl' => 'Catering eventowy i dostawa usług gastronomicznych'
                ])
            ],
            [
                'id' => 182,
                'parent_id' => 11,
                'slug' => 'food-products',
                'name' => 'Food Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Products',
                    'de' => 'Lebensmittelprodukte',
                    'es' => 'Productos Alimenticios',
                    'pl' => 'Produkty Spożywcze'
                ]),
                'scom' => 'Food product manufacturing and distribution',
                'scom_translations' => json_encode([
                    'en' => 'Food product manufacturing and distribution',
                    'de' => 'Lebensmittelproduktion und -vertrieb',
                    'es' => 'Fabricación y distribución de productos alimenticios',
                    'pl' => 'Produkcja i dystrybucja produktów spożywczych'
                ])
            ],
            [
                'id' => 183,
                'parent_id' => 11,
                'slug' => 'beverage-company',
                'name' => 'Beverage Company',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Beverage Company',
                    'de' => 'Getränkeunternehmen',
                    'es' => 'Empresa de Bebidas',
                    'pl' => 'Firma Napojów'
                ]),
                'scom' => 'Beverage production and distribution business',
                'scom_translations' => json_encode([
                    'en' => 'Beverage production and distribution business',
                    'de' => 'Getränkeproduktion und -vertriebsgeschäft',
                    'es' => 'Negocio de producción y distribución de bebidas',
                    'pl' => 'Biznes produkcji i dystrybucji napojów'
                ])
            ],
            [
                'id' => 184,
                'parent_id' => 11,
                'slug' => 'food-delivery-service',
                'name' => 'Food Delivery Service',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Delivery Service',
                    'de' => 'Essenslieferservice',
                    'es' => 'Servicio de Entrega de Comida',
                    'pl' => 'Serwis Dostawy Jedzenia'
                ]),
                'scom' => 'Food delivery platform and logistics services',
                'scom_translations' => json_encode([
                    'en' => 'Food delivery platform and logistics services',
                    'de' => 'Essenslieferplattform und Logistikdienstleistungen',
                    'es' => 'Plataforma de entrega de comida y servicios logísticos',
                    'pl' => 'Platforma dostawy żywności i usługi logistyczne'
                ])
            ],
            [
                'id' => 185,
                'parent_id' => 11,
                'slug' => 'meal-prep-service',
                'name' => 'Meal Prep Service',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Meal Prep Service',
                    'de' => 'Meal-Prep-Service',
                    'es' => 'Servicio de Preparación de Comidas',
                    'pl' => 'Serwis Przygotowania Posiłków'
                ]),
                'scom' => 'Pre-prepared meal planning and delivery services',
                'scom_translations' => json_encode([
                    'en' => 'Pre-prepared meal planning and delivery services',
                    'de' => 'Vorgefertigte Mahlzeitenplanung und Lieferdienstleistungen',
                    'es' => 'Servicios de planificación y entrega de comidas pre-preparadas',
                    'pl' => 'Usługi planowania i dostawy przygotowanych posiłków'
                ])
            ],
            [
                'id' => 186,
                'parent_id' => 11,
                'slug' => 'food-blog-content',
                'name' => 'Food Blog/Content',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Blog/Content',
                    'de' => 'Food-Blog/Content',
                    'es' => 'Blog/Contenido de Comida',
                    'pl' => 'Blog/Treści Kulinarne'
                ]),
                'scom' => 'Food blogging and culinary content creation',
                'scom_translations' => json_encode([
                    'en' => 'Food blogging and culinary content creation',
                    'de' => 'Food-Blogging und kulinarische Content-Erstellung',
                    'es' => 'Blogging de comida y creación de contenido culinario',
                    'pl' => 'Blogowanie o jedzeniu i tworzenie treści kulinarnych'
                ])
            ],
            [
                'id' => 187,
                'parent_id' => 11,
                'slug' => 'cooking-classes',
                'name' => 'Cooking Classes',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cooking Classes',
                    'de' => 'Kochkurse',
                    'es' => 'Clases de Cocina',
                    'pl' => 'Kursy Gotowania'
                ]),
                'scom' => 'Culinary education and cooking instruction services',
                'scom_translations' => json_encode([
                    'en' => 'Culinary education and cooking instruction services',
                    'de' => 'Kulinarische Bildung und Kochunterrichtsdienstleistungen',
                    'es' => 'Servicios de educación culinaria e instrucción de cocina',
                    'pl' => 'Usługi edukacji kulinarnej i nauki gotowania'
                ])
            ],
            [
                'id' => 188,
                'parent_id' => 11,
                'slug' => 'food-consulting',
                'name' => 'Food Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Consulting',
                    'de' => 'Lebensmittelberatung',
                    'es' => 'Consultoría Alimentaria',
                    'pl' => 'Doradztwo Spożywcze'
                ]),
                'scom' => 'Food industry consulting and menu development services',
                'scom_translations' => json_encode([
                    'en' => 'Food industry consulting and menu development services',
                    'de' => 'Lebensmittelindustrie-Beratung und Menüentwicklungsdienstleistungen',
                    'es' => 'Servicios de consultoría de la industria alimentaria y desarrollo de menús',
                    'pl' => 'Usługi doradztwa przemysłu spożywczego i rozwoju menu'
                ])
            ],
            [
                'id' => 189,
                'parent_id' => 11,
                'slug' => 'specialty-food-retail',
                'name' => 'Specialty Food Retail',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Specialty Food Retail',
                    'de' => 'Spezialitäten-Lebensmittelhandel',
                    'es' => 'Retail de Alimentos Especializados',
                    'pl' => 'Handel Detaliczny Żywnością Specjalistyczną'
                ]),
                'scom' => 'Gourmet and specialty food retail business',
                'scom_translations' => json_encode([
                    'en' => 'Gourmet and specialty food retail business',
                    'de' => 'Gourmet- und Spezialitäten-Lebensmittelhandelsgeschäft',
                    'es' => 'Negocio de retail de alimentos gourmet y especializados',
                    'pl' => 'Biznes sprzedaży detalicznej żywności gourmet i specjalistycznej'
                ])
            ],
            [
                'id' => 190,
                'parent_id' => 11,
                'slug' => 'brewery-distillery',
                'name' => 'Brewery/Distillery',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Brewery/Distillery',
                    'de' => 'Brauerei/Destillerie',
                    'es' => 'Cervecería/Destilería',
                    'pl' => 'Browar/Destylarnia'
                ]),
                'scom' => 'Alcoholic beverage production and brewing services',
                'scom_translations' => json_encode([
                    'en' => 'Alcoholic beverage production and brewing services',
                    'de' => 'Alkoholische Getränkeproduktion und Braudienstleistungen',
                    'es' => 'Servicios de producción de bebidas alcohólicas y cervecería',
                    'pl' => 'Usługi produkcji napojów alkoholowych i browarnictwa'
                ])
            ],
            [
                'id' => 191,
                'parent_id' => 11,
                'slug' => 'food-technology',
                'name' => 'Food Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Technology',
                    'de' => 'Lebensmitteltechnologie',
                    'es' => 'Tecnología Alimentaria',
                    'pl' => 'Technologia Żywności'
                ]),
                'scom' => 'Food tech solutions and culinary innovation services',
                'scom_translations' => json_encode([
                    'en' => 'Food tech solutions and culinary innovation services',
                    'de' => 'Food-Tech-Lösungen und kulinarische Innovationsdienstleistungen',
                    'es' => 'Soluciones de tecnología alimentaria y servicios de innovación culinaria',
                    'pl' => 'Rozwiązania technologii żywności i usługi innowacji kulinarnych'
                ])
            ],
            [
                'id' => 192,
                'parent_id' => 11,
                'slug' => 'ghost-kitchen',
                'name' => 'Ghost Kitchen',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Ghost Kitchen',
                    'de' => 'Ghost Kitchen',
                    'es' => 'Cocina Fantasma',
                    'pl' => 'Kuchnia Wirtualna'
                ]),
                'scom' => 'Delivery-only restaurant and ghost kitchen operations',
                'scom_translations' => json_encode([
                    'en' => 'Delivery-only restaurant and ghost kitchen operations',
                    'de' => 'Lieferrestaurant und Ghost-Kitchen-Betrieb',
                    'es' => 'Operaciones de restaurante solo para entrega y cocina fantasma',
                    'pl' => 'Działalność restauracji tylko z dostawą i kuchni wirtualnych'
                ])
            ],
            [
                'id' => 193,
                'parent_id' => 11,
                'slug' => 'food-safety-consulting',
                'name' => 'Food Safety Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Food Safety Consulting',
                    'de' => 'Lebensmittelsicherheits-Beratung',
                    'es' => 'Consultoría de Seguridad Alimentaria',
                    'pl' => 'Doradztwo Bezpieczeństwa Żywności'
                ]),
                'scom' => 'Food safety compliance and HACCP consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Food safety compliance and HACCP consulting services',
                    'de' => 'Lebensmittelsicherheits-Compliance und HACCP-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de cumplimiento de seguridad alimentaria y HACCP',
                    'pl' => 'Usługi doradztwa zgodności bezpieczeństwa żywności i HACCP'
                ])
            ],
            [
                'id' => 194,
                'parent_id' => 11,
                'slug' => 'others-food-beverage',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other food and beverage services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other food and beverage services not listed above',
                    'de' => 'Andere Lebensmittel- und Getränkedienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de alimentos y bebidas no listados arriba',
                    'pl' => 'Inne usługi żywności i napojów niewymienione powyżej'
                ])
            ],
            [
                'id' => 195,
                'parent_id' => 12,
                'slug' => 'travel-agency',
                'name' => 'Travel Agency',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel Agency',
                    'de' => 'Reisebüro',
                    'es' => 'Agencia de Viajes',
                    'pl' => 'Biuro Podróży'
                ]),
                'scom' => 'Travel planning and booking agency services',
                'scom_translations' => json_encode([
                    'en' => 'Travel planning and booking agency services',
                    'de' => 'Reiseplanungs- und Buchungsagentur-Dienstleistungen',
                    'es' => 'Servicios de agencia de planificación y reservas de viajes',
                    'pl' => 'Usługi agencji planowania i rezerwacji podróży'
                ])
            ],
            [
                'id' => 196,
                'parent_id' => 12,
                'slug' => 'tour-services',
                'name' => 'Tour Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tour Services',
                    'de' => 'Tourdienstleistungen',
                    'es' => 'Servicios de Tours',
                    'pl' => 'Usługi Turystyczne'
                ]),
                'scom' => 'Guided tours and sightseeing services',
                'scom_translations' => json_encode([
                    'en' => 'Guided tours and sightseeing services',
                    'de' => 'Geführte Touren und Besichtigungsdienstleistungen',
                    'es' => 'Servicios de tours guiados y turismo',
                    'pl' => 'Usługi wycieczek z przewodnikiem i zwiedzania'
                ])
            ],
            [
                'id' => 197,
                'parent_id' => 12,
                'slug' => 'vacation-rental-management',
                'name' => 'Vacation Rental Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Vacation Rental Management',
                    'de' => 'Ferienvermietungs-Management',
                    'es' => 'Gestión de Alquiler Vacacional',
                    'pl' => 'Zarządzanie Wynajmem Wakacyjnym'
                ]),
                'scom' => 'Short-term rental property management services',
                'scom_translations' => json_encode([
                    'en' => 'Short-term rental property management services',
                    'de' => 'Kurzzeit-Mietimmobilien-Verwaltungsdienstleistungen',
                    'es' => 'Servicios de gestión de propiedades de alquiler a corto plazo',
                    'pl' => 'Usługi zarządzania nieruchomościami na wynajem krótkoterminowy'
                ])
            ],
            [
                'id' => 198,
                'parent_id' => 12,
                'slug' => 'travel-blog-content',
                'name' => 'Travel Blog/Content',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel Blog/Content',
                    'de' => 'Reise-Blog/Content',
                    'es' => 'Blog/Contenido de Viajes',
                    'pl' => 'Blog/Treści Podróżnicze'
                ]),
                'scom' => 'Travel blogging and destination content creation',
                'scom_translations' => json_encode([
                    'en' => 'Travel blogging and destination content creation',
                    'de' => 'Reise-Blogging und Reiseziel-Content-Erstellung',
                    'es' => 'Blogging de viajes y creación de contenido de destinos',
                    'pl' => 'Blogowanie podróżnicze i tworzenie treści o destynacjach'
                ])
            ],
            [
                'id' => 199,
                'parent_id' => 12,
                'slug' => 'hospitality-consulting',
                'name' => 'Hospitality Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Hospitality Consulting',
                    'de' => 'Gastgewerbe-Beratung',
                    'es' => 'Consultoría de Hospitalidad',
                    'pl' => 'Doradztwo Hotelarskie'
                ]),
                'scom' => 'Hotel and hospitality industry consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Hotel and hospitality industry consulting services',
                    'de' => 'Hotel- und Gastgewerbe-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de la industria hotelera y de hospitalidad',
                    'pl' => 'Usługi doradztwa branży hotelarskiej i gościnności'
                ])
            ],
            [
                'id' => 200,
                'parent_id' => 12,
                'slug' => 'event-planning',
                'name' => 'Event Planning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Event Planning',
                    'de' => 'Eventplanung',
                    'es' => 'Planificación de Eventos',
                    'pl' => 'Planowanie Wydarzeń'
                ]),
                'scom' => 'Event coordination and destination event planning',
                'scom_translations' => json_encode([
                    'en' => 'Event coordination and destination event planning',
                    'de' => 'Eventkoordination und Reiseziel-Eventplanung',
                    'es' => 'Coordinación de eventos y planificación de eventos de destino',
                    'pl' => 'Koordynacja wydarzeń i planowanie wydarzeń destynacyjnych'
                ])
            ],
            [
                'id' => 201,
                'parent_id' => 12,
                'slug' => 'travel-technology',
                'name' => 'Travel Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel Technology',
                    'de' => 'Reisetechnologie',
                    'es' => 'Tecnología de Viajes',
                    'pl' => 'Technologia Podróży'
                ]),
                'scom' => 'Travel tech solutions and booking platform services',
                'scom_translations' => json_encode([
                    'en' => 'Travel tech solutions and booking platform services',
                    'de' => 'Reise-Tech-Lösungen und Buchungsplattform-Dienstleistungen',
                    'es' => 'Soluciones de tecnología de viajes y servicios de plataforma de reservas',
                    'pl' => 'Rozwiązania technologii podróży i usługi platform rezerwacyjnych'
                ])
            ],
            [
                'id' => 202,
                'parent_id' => 12,
                'slug' => 'adventure-services',
                'name' => 'Adventure Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Adventure Services',
                    'de' => 'Abenteuer-Dienstleistungen',
                    'es' => 'Servicios de Aventura',
                    'pl' => 'Usługi Przygodowe'
                ]),
                'scom' => 'Adventure tourism and outdoor activity services',
                'scom_translations' => json_encode([
                    'en' => 'Adventure tourism and outdoor activity services',
                    'de' => 'Abenteuer-Tourismus und Outdoor-Aktivitäten-Dienstleistungen',
                    'es' => 'Servicios de turismo de aventura y actividades al aire libre',
                    'pl' => 'Usługi turystyki przygodowej i aktywności na świeżym powietrzu'
                ])
            ],
            [
                'id' => 203,
                'parent_id' => 12,
                'slug' => 'cultural-experiences',
                'name' => 'Cultural Experiences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cultural Experiences',
                    'de' => 'Kulturelle Erlebnisse',
                    'es' => 'Experiencias Culturales',
                    'pl' => 'Doświadczenia Kulturalne'
                ]),
                'scom' => 'Cultural tourism and authentic local experience services',
                'scom_translations' => json_encode([
                    'en' => 'Cultural tourism and authentic local experience services',
                    'de' => 'Kulturtourismus und authentische lokale Erlebnis-Dienstleistungen',
                    'es' => 'Servicios de turismo cultural y experiencias locales auténticas',
                    'pl' => 'Usługi turystyki kulturalnej i autentycznych doświadczeń lokalnych'
                ])
            ],
            [
                'id' => 204,
                'parent_id' => 12,
                'slug' => 'travel-products',
                'name' => 'Travel Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel Products',
                    'de' => 'Reiseprodukte',
                    'es' => 'Productos de Viaje',
                    'pl' => 'Produkty Podróżnicze'
                ]),
                'scom' => 'Travel gear and accessory retail business',
                'scom_translations' => json_encode([
                    'en' => 'Travel gear and accessory retail business',
                    'de' => 'Reiseausrüstung und Zubehör-Einzelhandelsgeschäft',
                    'es' => 'Negocio de retail de equipos y accesorios de viaje',
                    'pl' => 'Biznes sprzedaży detalicznej sprzętu i akcesoriów podróżnych'
                ])
            ],
            [
                'id' => 205,
                'parent_id' => 12,
                'slug' => 'hotel-management',
                'name' => 'Hotel Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Hotel Management',
                    'de' => 'Hotelmanagement',
                    'es' => 'Gestión Hotelera',
                    'pl' => 'Zarządzanie Hotelami'
                ]),
                'scom' => 'Hotel operations and hospitality management services',
                'scom_translations' => json_encode([
                    'en' => 'Hotel operations and hospitality management services',
                    'de' => 'Hotelbetrieb und Gastgewerbe-Management-Dienstleistungen',
                    'es' => 'Servicios de operaciones hoteleras y gestión de hospitalidad',
                    'pl' => 'Usługi operacji hotelowych i zarządzania gościnnością'
                ])
            ],
            [
                'id' => 206,
                'parent_id' => 12,
                'slug' => 'travel-insurance',
                'name' => 'Travel Insurance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Travel Insurance',
                    'de' => 'Reiseversicherung',
                    'es' => 'Seguro de Viaje',
                    'pl' => 'Ubezpieczenie Podróżne'
                ]),
                'scom' => 'Travel insurance and protection services',
                'scom_translations' => json_encode([
                    'en' => 'Travel insurance and protection services',
                    'de' => 'Reiseversicherung und Schutzdienstleistungen',
                    'es' => 'Servicios de seguro de viaje y protección',
                    'pl' => 'Usługi ubezpieczeń podróżnych i ochrony'
                ])
            ],
            [
                'id' => 207,
                'parent_id' => 12,
                'slug' => 'concierge-services',
                'name' => 'Concierge Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Concierge Services',
                    'de' => 'Concierge-Dienstleistungen',
                    'es' => 'Servicios de Conserjería',
                    'pl' => 'Usługi Konsjerża'
                ]),
                'scom' => 'Luxury travel concierge and personal assistance services',
                'scom_translations' => json_encode([
                    'en' => 'Luxury travel concierge and personal assistance services',
                    'de' => 'Luxus-Reise-Concierge und persönliche Assistenz-Dienstleistungen',
                    'es' => 'Servicios de conserjería de viajes de lujo y asistencia personal',
                    'pl' => 'Usługi konsjerża podróży luksusowych i asystenta osobistego'
                ])
            ],
            [
                'id' => 208,
                'parent_id' => 12,
                'slug' => 'eco-tourism',
                'name' => 'Eco-Tourism',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Eco-Tourism',
                    'de' => 'Ökotourismus',
                    'es' => 'Ecoturismo',
                    'pl' => 'Ekoturystyka'
                ]),
                'scom' => 'Sustainable and eco-friendly tourism services',
                'scom_translations' => json_encode([
                    'en' => 'Sustainable and eco-friendly tourism services',
                    'de' => 'Nachhaltige und umweltfreundliche Tourismusdienstleistungen',
                    'es' => 'Servicios de turismo sostenible y ecológico',
                    'pl' => 'Usługi turystyki zrównoważonej i przyjaznej środowisku'
                ])
            ],
            [
                'id' => 209,
                'parent_id' => 12,
                'slug' => 'others-travel-hospitality',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other travel and hospitality services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other travel and hospitality services not listed above',
                    'de' => 'Andere Reise- und Gastgewerbedienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de viajes y hospitalidad no listados arriba',
                    'pl' => 'Inne usługi podróży i gościnności niewymienione powyżej'
                ])
            ],
            [
                'id' => 210,
                'parent_id' => 13,
                'slug' => 'product-manufacturing',
                'name' => 'Product Manufacturing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Manufacturing',
                    'de' => 'Produktherstellung',
                    'es' => 'Fabricación de Productos',
                    'pl' => 'Produkcja Wyrobów'
                ]),
                'scom' => 'General product manufacturing and production services',
                'scom_translations' => json_encode([
                    'en' => 'General product manufacturing and production services',
                    'de' => 'Allgemeine Produktherstellung und Produktionsdienstleistungen',
                    'es' => 'Servicios generales de fabricación y producción de productos',
                    'pl' => 'Ogólne usługi produkcji i wytwarzania produktów'
                ])
            ],
            [
                'id' => 211,
                'parent_id' => 13,
                'slug' => '3d-printing-services',
                'name' => '3D Printing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => '3D Printing Services',
                    'de' => '3D-Druckdienstleistungen',
                    'es' => 'Servicios de Impresión 3D',
                    'pl' => 'Usługi Druku 3D'
                ]),
                'scom' => 'Additive manufacturing and 3D printing services',
                'scom_translations' => json_encode([
                    'en' => 'Additive manufacturing and 3D printing services',
                    'de' => 'Additive Fertigung und 3D-Druckdienstleistungen',
                    'es' => 'Servicios de fabricación aditiva e impresión 3D',
                    'pl' => 'Usługi produkcji addytywnej i druku 3D'
                ])
            ],
            [
                'id' => 212,
                'parent_id' => 13,
                'slug' => 'custom-manufacturing',
                'name' => 'Custom Manufacturing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Custom Manufacturing',
                    'de' => 'Kundenspezifische Fertigung',
                    'es' => 'Fabricación Personalizada',
                    'pl' => 'Produkcja na Zamówienie'
                ]),
                'scom' => 'Custom and bespoke manufacturing services',
                'scom_translations' => json_encode([
                    'en' => 'Custom and bespoke manufacturing services',
                    'de' => 'Kundenspezifische und maßgeschneiderte Fertigungsdienstleistungen',
                    'es' => 'Servicios de fabricación personalizada y a medida',
                    'pl' => 'Usługi produkcji niestandardowej i na zamówienie'
                ])
            ],
            [
                'id' => 213,
                'parent_id' => 13,
                'slug' => 'product-development',
                'name' => 'Product Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Development',
                    'de' => 'Produktentwicklung',
                    'es' => 'Desarrollo de Productos',
                    'pl' => 'Rozwój Produktów'
                ]),
                'scom' => 'New product development and innovation services',
                'scom_translations' => json_encode([
                    'en' => 'New product development and innovation services',
                    'de' => 'Neue Produktentwicklung und Innovationsdienstleistungen',
                    'es' => 'Servicios de desarrollo de nuevos productos e innovación',
                    'pl' => 'Usługi rozwoju nowych produktów i innowacji'
                ])
            ],
            [
                'id' => 214,
                'parent_id' => 13,
                'slug' => 'supply-chain-services',
                'name' => 'Supply Chain Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Supply Chain Services',
                    'de' => 'Lieferketten-Dienstleistungen',
                    'es' => 'Servicios de Cadena de Suministro',
                    'pl' => 'Usługi Łańcucha Dostaw'
                ]),
                'scom' => 'Supply chain management and logistics services',
                'scom_translations' => json_encode([
                    'en' => 'Supply chain management and logistics services',
                    'de' => 'Lieferkettenmanagement und Logistikdienstleistungen',
                    'es' => 'Servicios de gestión de cadena de suministro y logística',
                    'pl' => 'Usługi zarządzania łańcuchem dostaw i logistyki'
                ])
            ],
            [
                'id' => 215,
                'parent_id' => 13,
                'slug' => 'quality-control-services',
                'name' => 'Quality Control Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Quality Control Services',
                    'de' => 'Qualitätskontroll-Dienstleistungen',
                    'es' => 'Servicios de Control de Calidad',
                    'pl' => 'Usługi Kontroli Jakości'
                ]),
                'scom' => 'Product quality assurance and testing services',
                'scom_translations' => json_encode([
                    'en' => 'Product quality assurance and testing services',
                    'de' => 'Produktqualitätssicherung und Testdienstleistungen',
                    'es' => 'Servicios de aseguramiento de calidad de productos y pruebas',
                    'pl' => 'Usługi zapewnienia jakości produktów i testowania'
                ])
            ],
            [
                'id' => 216,
                'parent_id' => 13,
                'slug' => 'packaging-services',
                'name' => 'Packaging Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Packaging Services',
                    'de' => 'Verpackungsdienstleistungen',
                    'es' => 'Servicios de Empaque',
                    'pl' => 'Usługi Pakowania'
                ]),
                'scom' => 'Product packaging and labeling services',
                'scom_translations' => json_encode([
                    'en' => 'Product packaging and labeling services',
                    'de' => 'Produktverpackung und Etikettierungsdienstleistungen',
                    'es' => 'Servicios de empaque y etiquetado de productos',
                    'pl' => 'Usługi pakowania i etykietowania produktów'
                ])
            ],
            [
                'id' => 217,
                'parent_id' => 13,
                'slug' => 'prototype-development',
                'name' => 'Prototype Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Prototype Development',
                    'de' => 'Prototypentwicklung',
                    'es' => 'Desarrollo de Prototipos',
                    'pl' => 'Rozwój Prototypów'
                ]),
                'scom' => 'Product prototyping and proof-of-concept services',
                'scom_translations' => json_encode([
                    'en' => 'Product prototyping and proof-of-concept services',
                    'de' => 'Produktprototyping und Proof-of-Concept-Dienstleistungen',
                    'es' => 'Servicios de prototipado de productos y prueba de concepto',
                    'pl' => 'Usługi prototypowania produktów i proof-of-concept'
                ])
            ],
            [
                'id' => 218,
                'parent_id' => 13,
                'slug' => 'industrial-design',
                'name' => 'Industrial Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industrial Design',
                    'de' => 'Industriedesign',
                    'es' => 'Diseño Industrial',
                    'pl' => 'Projektowanie Przemysłowe'
                ]),
                'scom' => 'Industrial and product design services',
                'scom_translations' => json_encode([
                    'en' => 'Industrial and product design services',
                    'de' => 'Industrie- und Produktdesign-Dienstleistungen',
                    'es' => 'Servicios de diseño industrial y de productos',
                    'pl' => 'Usługi projektowania przemysłowego i produktów'
                ])
            ],
            [
                'id' => 219,
                'parent_id' => 13,
                'slug' => 'manufacturing-consulting',
                'name' => 'Manufacturing Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Manufacturing Consulting',
                    'de' => 'Fertigungs-Beratung',
                    'es' => 'Consultoría de Fabricación',
                    'pl' => 'Doradztwo Produkcyjne'
                ]),
                'scom' => 'Manufacturing process optimization and consulting',
                'scom_translations' => json_encode([
                    'en' => 'Manufacturing process optimization and consulting',
                    'de' => 'Fertigungsprozessoptimierung und Beratung',
                    'es' => 'Optimización de procesos de fabricación y consultoría',
                    'pl' => 'Optymalizacja procesów produkcyjnych i doradztwo'
                ])
            ],
            [
                'id' => 220,
                'parent_id' => 13,
                'slug' => 'contract-manufacturing',
                'name' => 'Contract Manufacturing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Contract Manufacturing',
                    'de' => 'Lohnfertigung',
                    'es' => 'Fabricación por Contrato',
                    'pl' => 'Produkcja Kontraktowa'
                ]),
                'scom' => 'Third-party manufacturing and production services',
                'scom_translations' => json_encode([
                    'en' => 'Third-party manufacturing and production services',
                    'de' => 'Drittanbieter-Fertigungs- und Produktionsdienstleistungen',
                    'es' => 'Servicios de fabricación y producción de terceros',
                    'pl' => 'Usługi produkcji i wytwarzania przez osoby trzecie'
                ])
            ],
            [
                'id' => 221,
                'parent_id' => 13,
                'slug' => 'automation-services',
                'name' => 'Automation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Automation Services',
                    'de' => 'Automatisierungsdienstleistungen',
                    'es' => 'Servicios de Automatización',
                    'pl' => 'Usługi Automatyzacji'
                ]),
                'scom' => 'Manufacturing automation and robotics services',
                'scom_translations' => json_encode([
                    'en' => 'Manufacturing automation and robotics services',
                    'de' => 'Fertigungsautomatisierung und Robotikdienstleistungen',
                    'es' => 'Servicios de automatización de fabricación y robótica',
                    'pl' => 'Usługi automatyzacji produkcji i robotyki'
                ])
            ],
            [
                'id' => 222,
                'parent_id' => 13,
                'slug' => 'lean-manufacturing',
                'name' => 'Lean Manufacturing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lean Manufacturing',
                    'de' => 'Lean Manufacturing',
                    'es' => 'Manufactura Esbelta',
                    'pl' => 'Lean Manufacturing'
                ]),
                'scom' => 'Lean production and waste reduction services',
                'scom_translations' => json_encode([
                    'en' => 'Lean production and waste reduction services',
                    'de' => 'Lean-Produktion und Abfallreduzierungsdienstleistungen',
                    'es' => 'Servicios de producción esbelta y reducción de desperdicios',
                    'pl' => 'Usługi lean production i redukcji marnotrawstwa'
                ])
            ],
            [
                'id' => 223,
                'parent_id' => 13,
                'slug' => 'assembly-services',
                'name' => 'Assembly Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Assembly Services',
                    'de' => 'Montage-Dienstleistungen',
                    'es' => 'Servicios de Ensamblaje',
                    'pl' => 'Usługi Montażu'
                ]),
                'scom' => 'Product assembly and sub-assembly services',
                'scom_translations' => json_encode([
                    'en' => 'Product assembly and sub-assembly services',
                    'de' => 'Produktmontage und Teilmontage-Dienstleistungen',
                    'es' => 'Servicios de ensamblaje de productos y sub-ensamblaje',
                    'pl' => 'Usługi montażu produktów i podzespołów'
                ])
            ],
            [
                'id' => 224,
                'parent_id' => 13,
                'slug' => 'others-manufacturing-production',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other manufacturing and production services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other manufacturing and production services not listed above',
                    'de' => 'Andere Fertigungs- und Produktionsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de fabricación y producción no listados arriba',
                    'pl' => 'Inne usługi produkcyjne i wytwórcze niewymienione powyżej'
                ])
            ],
            [
                'id' => 225,
                'parent_id' => 14,
                'slug' => 'delivery-services',
                'name' => 'Delivery Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Delivery Services',
                    'de' => 'Lieferdienstleistungen',
                    'es' => 'Servicios de Entrega',
                    'pl' => 'Usługi Dostawy'
                ]),
                'scom' => 'Package and goods delivery services',
                'scom_translations' => json_encode([
                    'en' => 'Package and goods delivery services',
                    'de' => 'Paket- und Warenlieferdienstleistungen',
                    'es' => 'Servicios de entrega de paquetes y mercancías',
                    'pl' => 'Usługi dostawy paczek i towarów'
                ])
            ],
            [
                'id' => 226,
                'parent_id' => 14,
                'slug' => 'logistics-consulting',
                'name' => 'Logistics Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Logistics Consulting',
                    'de' => 'Logistik-Beratung',
                    'es' => 'Consultoría Logística',
                    'pl' => 'Doradztwo Logistyczne'
                ]),
                'scom' => 'Supply chain and logistics optimization consulting',
                'scom_translations' => json_encode([
                    'en' => 'Supply chain and logistics optimization consulting',
                    'de' => 'Lieferketten- und Logistikoptimierungs-Beratung',
                    'es' => 'Consultoría de optimización de cadena de suministro y logística',
                    'pl' => 'Doradztwo optymalizacji łańcucha dostaw i logistyki'
                ])
            ],
            [
                'id' => 227,
                'parent_id' => 14,
                'slug' => 'transportation-services',
                'name' => 'Transportation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Transportation Services',
                    'de' => 'Transportdienstleistungen',
                    'es' => 'Servicios de Transporte',
                    'pl' => 'Usługi Transportowe'
                ]),
                'scom' => 'Freight and passenger transportation services',
                'scom_translations' => json_encode([
                    'en' => 'Freight and passenger transportation services',
                    'de' => 'Fracht- und Personentransportdienstleistungen',
                    'es' => 'Servicios de transporte de carga y pasajeros',
                    'pl' => 'Usługi transportu towarowego i pasażerskiego'
                ])
            ],
            [
                'id' => 228,
                'parent_id' => 14,
                'slug' => 'fleet-management',
                'name' => 'Fleet Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fleet Management',
                    'de' => 'Flottenmanagement',
                    'es' => 'Gestión de Flotas',
                    'pl' => 'Zarządzanie Flotą'
                ]),
                'scom' => 'Vehicle fleet management and optimization services',
                'scom_translations' => json_encode([
                    'en' => 'Vehicle fleet management and optimization services',
                    'de' => 'Fahrzeugflotten-Management und Optimierungsdienstleistungen',
                    'es' => 'Servicios de gestión y optimización de flotas de vehículos',
                    'pl' => 'Usługi zarządzania i optymalizacji floty pojazdów'
                ])
            ],
            [
                'id' => 229,
                'parent_id' => 14,
                'slug' => 'warehousing-services',
                'name' => 'Warehousing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Warehousing Services',
                    'de' => 'Lagerdienstleistungen',
                    'es' => 'Servicios de Almacenamiento',
                    'pl' => 'Usługi Magazynowe'
                ]),
                'scom' => 'Storage and warehousing facility services',
                'scom_translations' => json_encode([
                    'en' => 'Storage and warehousing facility services',
                    'de' => 'Lager- und Lagerhausdienstleistungen',
                    'es' => 'Servicios de instalaciones de almacenamiento y depósito',
                    'pl' => 'Usługi magazynów i obiektów składowych'
                ])
            ],
            [
                'id' => 230,
                'parent_id' => 14,
                'slug' => 'supply-chain-management',
                'name' => 'Supply Chain Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Supply Chain Management',
                    'de' => 'Lieferkettenmanagement',
                    'es' => 'Gestión de Cadena de Suministro',
                    'pl' => 'Zarządzanie Łańcuchem Dostaw'
                ]),
                'scom' => 'End-to-end supply chain management services',
                'scom_translations' => json_encode([
                    'en' => 'End-to-end supply chain management services',
                    'de' => 'End-to-End-Lieferkettenmanagement-Dienstleistungen',
                    'es' => 'Servicios de gestión integral de cadena de suministro',
                    'pl' => 'Kompleksowe usługi zarządzania łańcuchem dostaw'
                ])
            ],
            [
                'id' => 231,
                'parent_id' => 14,
                'slug' => 'shipping-services',
                'name' => 'Shipping Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Shipping Services',
                    'de' => 'Versanddienstleistungen',
                    'es' => 'Servicios de Envío',
                    'pl' => 'Usługi Wysyłkowe'
                ]),
                'scom' => 'Maritime and freight shipping services',
                'scom_translations' => json_encode([
                    'en' => 'Maritime and freight shipping services',
                    'de' => 'See- und Frachtversanddienstleistungen',
                    'es' => 'Servicios de envío marítimo y de carga',
                    'pl' => 'Usługi żeglugi morskiej i transportu towarowego'
                ])
            ],
            [
                'id' => 232,
                'parent_id' => 14,
                'slug' => 'moving-services',
                'name' => 'Moving Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Moving Services',
                    'de' => 'Umzugsdienstleistungen',
                    'es' => 'Servicios de Mudanza',
                    'pl' => 'Usługi Przeprowadzkowe'
                ]),
                'scom' => 'Residential and commercial moving services',
                'scom_translations' => json_encode([
                    'en' => 'Residential and commercial moving services',
                    'de' => 'Wohn- und Gewerbeumzugsdienstleistungen',
                    'es' => 'Servicios de mudanza residencial y comercial',
                    'pl' => 'Usługi przeprowadzkowe mieszkaniowe i komercyjne'
                ])
            ],
            [
                'id' => 233,
                'parent_id' => 14,
                'slug' => 'courier-services',
                'name' => 'Courier Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Courier Services',
                    'de' => 'Kurierdienste',
                    'es' => 'Servicios de Mensajería',
                    'pl' => 'Usługi Kurierskie'
                ]),
                'scom' => 'Express courier and messenger services',
                'scom_translations' => json_encode([
                    'en' => 'Express courier and messenger services',
                    'de' => 'Express-Kurier- und Botendienste',
                    'es' => 'Servicios de mensajería y courier express',
                    'pl' => 'Usługi kurierskie ekspresowe i posłańców'
                ])
            ],
            [
                'id' => 234,
                'parent_id' => 14,
                'slug' => 'distribution-services',
                'name' => 'Distribution Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Distribution Services',
                    'de' => 'Vertriebsdienstleistungen',
                    'es' => 'Servicios de Distribución',
                    'pl' => 'Usługi Dystrybucji'
                ]),
                'scom' => 'Product distribution and fulfillment services',
                'scom_translations' => json_encode([
                    'en' => 'Product distribution and fulfillment services',
                    'de' => 'Produktvertrieb und Fulfillment-Dienstleistungen',
                    'es' => 'Servicios de distribución de productos y cumplimiento',
                    'pl' => 'Usługi dystrybucji produktów i realizacji zamówień'
                ])
            ],
            [
                'id' => 235,
                'parent_id' => 14,
                'slug' => 'cold-chain-logistics',
                'name' => 'Cold Chain Logistics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cold Chain Logistics',
                    'de' => 'Kühlketten-Logistik',
                    'es' => 'Logística de Cadena de Frío',
                    'pl' => 'Logistyka Łańcucha Chłodniczego'
                ]),
                'scom' => 'Temperature-controlled logistics and cold storage services',
                'scom_translations' => json_encode([
                    'en' => 'Temperature-controlled logistics and cold storage services',
                    'de' => 'Temperaturkontrollierte Logistik und Kühllagerdienstleistungen',
                    'es' => 'Servicios de logística controlada por temperatura y almacenamiento en frío',
                    'pl' => 'Usługi logistyki kontrolowanej temperaturowo i przechowywania w chłodni'
                ])
            ],
            [
                'id' => 236,
                'parent_id' => 14,
                'slug' => 'freight-forwarding',
                'name' => 'Freight Forwarding',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Freight Forwarding',
                    'de' => 'Spedition',
                    'es' => 'Transitario',
                    'pl' => 'Spedycja'
                ]),
                'scom' => 'International freight forwarding and customs services',
                'scom_translations' => json_encode([
                    'en' => 'International freight forwarding and customs services',
                    'de' => 'Internationale Speditions- und Zolldienstleistungen',
                    'es' => 'Servicios de transitario internacional y aduanas',
                    'pl' => 'Międzynarodowe usługi spedycyjne i celne'
                ])
            ],
            [
                'id' => 237,
                'parent_id' => 14,
                'slug' => 'logistics-technology',
                'name' => 'Logistics Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Logistics Technology',
                    'de' => 'Logistik-Technologie',
                    'es' => 'Tecnología Logística',
                    'pl' => 'Technologia Logistyczna'
                ]),
                'scom' => 'Transportation and logistics technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'Transportation and logistics technology solutions',
                    'de' => 'Transport- und Logistiktechnologie-Lösungen',
                    'es' => 'Soluciones de tecnología de transporte y logística',
                    'pl' => 'Rozwiązania technologiczne transportu i logistyki'
                ])
            ],
            [
                'id' => 238,
                'parent_id' => 14,
                'slug' => 'last-mile-delivery',
                'name' => 'Last Mile Delivery',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Last Mile Delivery',
                    'de' => 'Letzte-Meile-Zustellung',
                    'es' => 'Entrega de Última Milla',
                    'pl' => 'Dostawa Ostatniej Mili'
                ]),
                'scom' => 'Final delivery and last mile logistics services',
                'scom_translations' => json_encode([
                    'en' => 'Final delivery and last mile logistics services',
                    'de' => 'Endzustellung und Letzte-Meile-Logistikdienstleistungen',
                    'es' => 'Servicios de entrega final y logística de última milla',
                    'pl' => 'Usługi dostawy końcowej i logistyki ostatniej mili'
                ])
            ],
            [
                'id' => 239,
                'parent_id' => 14,
                'slug' => 'others-transportation-logistics',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other transportation and logistics services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other transportation and logistics services not listed above',
                    'de' => 'Andere Transport- und Logistikdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de transporte y logística no listados arriba',
                    'pl' => 'Inne usługi transportowe i logistyczne niewymienione powyżej'
                ])
            ],
            [
                'id' => 240,
                'parent_id' => 15,
                'slug' => 'event-planning',
                'name' => 'Event Planning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Event Planning',
                    'de' => 'Eventplanung',
                    'es' => 'Planificación de Eventos',
                    'pl' => 'Planowanie Wydarzeń'
                ]),
                'scom' => 'Professional event planning and coordination services',
                'scom_translations' => json_encode([
                    'en' => 'Professional event planning and coordination services',
                    'de' => 'Professionelle Eventplanung und Koordinationsdienstleistungen',
                    'es' => 'Servicios profesionales de planificación y coordinación de eventos',
                    'pl' => 'Profesjonalne usługi planowania i koordynacji wydarzeń'
                ])
            ],
            [
                'id' => 241,
                'parent_id' => 15,
                'slug' => 'entertainment-services',
                'name' => 'Entertainment Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Entertainment Services',
                    'de' => 'Unterhaltungsdienstleistungen',
                    'es' => 'Servicios de Entretenimiento',
                    'pl' => 'Usługi Rozrywkowe'
                ]),
                'scom' => 'Live entertainment and performer booking services',
                'scom_translations' => json_encode([
                    'en' => 'Live entertainment and performer booking services',
                    'de' => 'Live-Unterhaltung und Künstlerbuchungsdienstleistungen',
                    'es' => 'Servicios de entretenimiento en vivo y reserva de artistas',
                    'pl' => 'Usługi rozrywki na żywo i rezerwacji wykonawców'
                ])
            ],
            [
                'id' => 242,
                'parent_id' => 15,
                'slug' => 'music-production',
                'name' => 'Music Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Music Production',
                    'de' => 'Musikproduktion',
                    'es' => 'Producción Musical',
                    'pl' => 'Produkcja Muzyczna'
                ]),
                'scom' => 'Music recording and production services',
                'scom_translations' => json_encode([
                    'en' => 'Music recording and production services',
                    'de' => 'Musikaufnahme- und Produktionsdienstleistungen',
                    'es' => 'Servicios de grabación y producción musical',
                    'pl' => 'Usługi nagrywania i produkcji muzycznej'
                ])
            ],
            [
                'id' => 243,
                'parent_id' => 15,
                'slug' => 'gaming-services',
                'name' => 'Gaming Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Gaming Services',
                    'de' => 'Gaming-Dienstleistungen',
                    'es' => 'Servicios de Gaming',
                    'pl' => 'Usługi Gamingowe'
                ]),
                'scom' => 'Video game development and gaming entertainment services',
                'scom_translations' => json_encode([
                    'en' => 'Video game development and gaming entertainment services',
                    'de' => 'Videospielentwicklung und Gaming-Unterhaltungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de videojuegos y entretenimiento gaming',
                    'pl' => 'Usługi rozwoju gier wideo i rozrywki gamingowej'
                ])
            ],
            [
                'id' => 244,
                'parent_id' => 15,
                'slug' => 'sports-services',
                'name' => 'Sports Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports Services',
                    'de' => 'Sportdienstleistungen',
                    'es' => 'Servicios Deportivos',
                    'pl' => 'Usługi Sportowe'
                ]),
                'scom' => 'Sports event management and athletic services',
                'scom_translations' => json_encode([
                    'en' => 'Sports event management and athletic services',
                    'de' => 'Sportveranstaltungsmanagement und Athletikdienstleistungen',
                    'es' => 'Servicios de gestión de eventos deportivos y atléticos',
                    'pl' => 'Usługi zarządzania wydarzeniami sportowymi i atletycznymi'
                ])
            ],
            [
                'id' => 245,
                'parent_id' => 15,
                'slug' => 'recreation-activities',
                'name' => 'Recreation Activities',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Recreation Activities',
                    'de' => 'Freizeitaktivitäten',
                    'es' => 'Actividades Recreativas',
                    'pl' => 'Działania Rekreacyjne'
                ]),
                'scom' => 'Recreational and leisure activity services',
                'scom_translations' => json_encode([
                    'en' => 'Recreational and leisure activity services',
                    'de' => 'Freizeit- und Erholungsaktivitäten-Dienstleistungen',
                    'es' => 'Servicios de actividades recreativas y de ocio',
                    'pl' => 'Usługi działań rekreacyjnych i wypoczynkowych'
                ])
            ],
            [
                'id' => 246,
                'parent_id' => 15,
                'slug' => 'party-services',
                'name' => 'Party Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Party Services',
                    'de' => 'Party-Dienstleistungen',
                    'es' => 'Servicios de Fiestas',
                    'pl' => 'Usługi Imprezowe'
                ]),
                'scom' => 'Party planning and celebration services',
                'scom_translations' => json_encode([
                    'en' => 'Party planning and celebration services',
                    'de' => 'Partyplanung und Feierdienstleistungen',
                    'es' => 'Servicios de planificación de fiestas y celebraciones',
                    'pl' => 'Usługi planowania imprez i uroczystości'
                ])
            ],
            [
                'id' => 247,
                'parent_id' => 15,
                'slug' => 'wedding-planning',
                'name' => 'Wedding Planning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wedding Planning',
                    'de' => 'Hochzeitsplanung',
                    'es' => 'Planificación de Bodas',
                    'pl' => 'Planowanie Ślubów'
                ]),
                'scom' => 'Wedding coordination and bridal services',
                'scom_translations' => json_encode([
                    'en' => 'Wedding coordination and bridal services',
                    'de' => 'Hochzeitskoordination und Brautdienstleistungen',
                    'es' => 'Servicios de coordinación de bodas y nupciales',
                    'pl' => 'Usługi koordynacji ślubów i usługi ślubne'
                ])
            ],
            [
                'id' => 248,
                'parent_id' => 15,
                'slug' => 'corporate-events',
                'name' => 'Corporate Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Events',
                    'de' => 'Unternehmensveranstaltungen',
                    'es' => 'Eventos Corporativos',
                    'pl' => 'Wydarzenia Korporacyjne'
                ]),
                'scom' => 'Business event planning and corporate entertainment',
                'scom_translations' => json_encode([
                    'en' => 'Business event planning and corporate entertainment',
                    'de' => 'Geschäftsveranstaltungsplanung und Unternehmensunterhaltung',
                    'es' => 'Planificación de eventos empresariales y entretenimiento corporativo',
                    'pl' => 'Planowanie wydarzeń biznesowych i rozrywka korporacyjna'
                ])
            ],
            [
                'id' => 249,
                'parent_id' => 15,
                'slug' => 'festival-organization',
                'name' => 'Festival Organization',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Festival Organization',
                    'de' => 'Festival-Organisation',
                    'es' => 'Organización de Festivales',
                    'pl' => 'Organizacja Festiwali'
                ]),
                'scom' => 'Music festival and cultural event organization',
                'scom_translations' => json_encode([
                    'en' => 'Music festival and cultural event organization',
                    'de' => 'Musikfestival- und Kulturveranstaltungsorganisation',
                    'es' => 'Organización de festivales de música y eventos culturales',
                    'pl' => 'Organizacja festiwali muzycznych i wydarzeń kulturalnych'
                ])
            ],
            [
                'id' => 250,
                'parent_id' => 15,
                'slug' => 'venue-management',
                'name' => 'Venue Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Venue Management',
                    'de' => 'Veranstaltungsort-Management',
                    'es' => 'Gestión de Recintos',
                    'pl' => 'Zarządzanie Miejscami Wydarzeń'
                ]),
                'scom' => 'Event venue rental and facility management',
                'scom_translations' => json_encode([
                    'en' => 'Event venue rental and facility management',
                    'de' => 'Veranstaltungsort-Vermietung und Anlagenmanagement',
                    'es' => 'Alquiler de recintos para eventos y gestión de instalaciones',
                    'pl' => 'Wynajem miejsc na wydarzenia i zarządzanie obiektami'
                ])
            ],
            [
                'id' => 251,
                'parent_id' => 15,
                'slug' => 'av-production',
                'name' => 'AV Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'AV Production',
                    'de' => 'AV-Produktion',
                    'es' => 'Producción Audiovisual',
                    'pl' => 'Produkcja AV'
                ]),
                'scom' => 'Audio-visual production and technical event services',
                'scom_translations' => json_encode([
                    'en' => 'Audio-visual production and technical event services',
                    'de' => 'Audiovisuelle Produktion und technische Veranstaltungsdienstleistungen',
                    'es' => 'Servicios de producción audiovisual y técnicos para eventos',
                    'pl' => 'Usługi produkcji audiowizualnej i techniczne dla wydarzeń'
                ])
            ],
            [
                'id' => 252,
                'parent_id' => 15,
                'slug' => 'talent-management',
                'name' => 'Talent Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Talent Management',
                    'de' => 'Talentmanagement',
                    'es' => 'Gestión de Talentos',
                    'pl' => 'Zarządzanie Talentami'
                ]),
                'scom' => 'Artist representation and talent booking services',
                'scom_translations' => json_encode([
                    'en' => 'Artist representation and talent booking services',
                    'de' => 'Künstlervertretung und Talentbuchungsdienstleistungen',
                    'es' => 'Servicios de representación de artistas y reserva de talentos',
                    'pl' => 'Usługi reprezentacji artystów i rezerwacji talentów'
                ])
            ],
            [
                'id' => 253,
                'parent_id' => 15,
                'slug' => 'event-technology',
                'name' => 'Event Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Event Technology',
                    'de' => 'Event-Technologie',
                    'es' => 'Tecnología de Eventos',
                    'pl' => 'Technologia Wydarzeń'
                ]),
                'scom' => 'Event management software and technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'Event management software and technology solutions',
                    'de' => 'Event-Management-Software und Technologielösungen',
                    'es' => 'Software de gestión de eventos y soluciones tecnológicas',
                    'pl' => 'Oprogramowanie do zarządzania wydarzeniami i rozwiązania technologiczne'
                ])
            ],
            [
                'id' => 254,
                'parent_id' => 15,
                'slug' => 'others-entertainment-event',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other entertainment and event services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other entertainment and event services not listed above',
                    'de' => 'Andere Unterhaltungs- und Veranstaltungsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de entretenimiento y eventos no listados arriba',
                    'pl' => 'Inne usługi rozrywkowe i eventowe niewymienione powyżej'
                ])
            ],
            [
                'id' => 255,
                'parent_id' => 16,
                'slug' => 'personal-assistant-services',
                'name' => 'Personal Assistant Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Assistant Services',
                    'de' => 'Persönliche Assistenzdienste',
                    'es' => 'Servicios de Asistente Personal',
                    'pl' => 'Usługi Asystenta Osobistego'
                ]),
                'scom' => 'Virtual and in-person personal assistant services',
                'scom_translations' => json_encode([
                    'en' => 'Virtual and in-person personal assistant services',
                    'de' => 'Virtuelle und persönliche Assistenzdienstleistungen',
                    'es' => 'Servicios de asistente personal virtual y presencial',
                    'pl' => 'Wirtualne i osobiste usługi asystenta osobistego'
                ])
            ],
            [
                'id' => 256,
                'parent_id' => 16,
                'slug' => 'concierge-services',
                'name' => 'Concierge Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Concierge Services',
                    'de' => 'Concierge-Dienstleistungen',
                    'es' => 'Servicios de Conserjería',
                    'pl' => 'Usługi Konsjerża'
                ]),
                'scom' => 'Luxury concierge and lifestyle management services',
                'scom_translations' => json_encode([
                    'en' => 'Luxury concierge and lifestyle management services',
                    'de' => 'Luxus-Concierge und Lifestyle-Management-Dienstleistungen',
                    'es' => 'Servicios de conserjería de lujo y gestión de estilo de vida',
                    'pl' => 'Luksusowe usługi konsjerża i zarządzania stylem życia'
                ])
            ],
            [
                'id' => 257,
                'parent_id' => 16,
                'slug' => 'lifestyle-management',
                'name' => 'Lifestyle Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lifestyle Management',
                    'de' => 'Lifestyle-Management',
                    'es' => 'Gestión de Estilo de Vida',
                    'pl' => 'Zarządzanie Stylem Życia'
                ]),
                'scom' => 'Personal lifestyle coordination and management services',
                'scom_translations' => json_encode([
                    'en' => 'Personal lifestyle coordination and management services',
                    'de' => 'Persönliche Lifestyle-Koordination und Managementdienstleistungen',
                    'es' => 'Servicios de coordinación y gestión de estilo de vida personal',
                    'pl' => 'Usługi koordynacji i zarządzania osobistym stylem życia'
                ])
            ],
            [
                'id' => 258,
                'parent_id' => 16,
                'slug' => 'personal-shopping',
                'name' => 'Personal Shopping',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Shopping',
                    'de' => 'Personal Shopping',
                    'es' => 'Compras Personales',
                    'pl' => 'Zakupy Osobiste'
                ]),
                'scom' => 'Personal stylist and shopping consultant services',
                'scom_translations' => json_encode([
                    'en' => 'Personal stylist and shopping consultant services',
                    'de' => 'Personal Stylist und Shopping-Beratungsdienstleistungen',
                    'es' => 'Servicios de estilista personal y consultor de compras',
                    'pl' => 'Usługi stylisty osobistego i konsultanta zakupów'
                ])
            ],
            [
                'id' => 259,
                'parent_id' => 16,
                'slug' => 'home-services',
                'name' => 'Home Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home Services',
                    'de' => 'Hausdienstleistungen',
                    'es' => 'Servicios del Hogar',
                    'pl' => 'Usługi Domowe'
                ]),
                'scom' => 'Residential home management and maintenance services',
                'scom_translations' => json_encode([
                    'en' => 'Residential home management and maintenance services',
                    'de' => 'Wohnungs-Management und Wartungsdienstleistungen',
                    'es' => 'Servicios de gestión y mantenimiento del hogar residencial',
                    'pl' => 'Usługi zarządzania i konserwacji domu mieszkalnego'
                ])
            ],
            [
                'id' => 260,
                'parent_id' => 16,
                'slug' => 'cleaning-services',
                'name' => 'Cleaning Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cleaning Services',
                    'de' => 'Reinigungsdienstleistungen',
                    'es' => 'Servicios de Limpieza',
                    'pl' => 'Usługi Sprzątania'
                ]),
                'scom' => 'Residential and commercial cleaning services',
                'scom_translations' => json_encode([
                    'en' => 'Residential and commercial cleaning services',
                    'de' => 'Wohn- und Gewerbereinigungsdienstleistungen',
                    'es' => 'Servicios de limpieza residencial y comercial',
                    'pl' => 'Usługi sprzątania mieszkaniowego i komercyjnego'
                ])
            ],
            [
                'id' => 261,
                'parent_id' => 16,
                'slug' => 'maintenance-services',
                'name' => 'Maintenance Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Maintenance Services',
                    'de' => 'Wartungsdienstleistungen',
                    'es' => 'Servicios de Mantenimiento',
                    'pl' => 'Usługi Konserwacyjne'
                ]),
                'scom' => 'Property maintenance and repair services',
                'scom_translations' => json_encode([
                    'en' => 'Property maintenance and repair services',
                    'de' => 'Immobilienwartung und Reparaturdienstleistungen',
                    'es' => 'Servicios de mantenimiento y reparación de propiedades',
                    'pl' => 'Usługi konserwacji i naprawy nieruchomości'
                ])
            ],
            [
                'id' => 262,
                'parent_id' => 16,
                'slug' => 'personal-security',
                'name' => 'Personal Security',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Security',
                    'de' => 'Personenschutz',
                    'es' => 'Seguridad Personal',
                    'pl' => 'Ochrona Osobista'
                ]),
                'scom' => 'Personal protection and security services',
                'scom_translations' => json_encode([
                    'en' => 'Personal protection and security services',
                    'de' => 'Personenschutz- und Sicherheitsdienstleistungen',
                    'es' => 'Servicios de protección personal y seguridad',
                    'pl' => 'Usługi ochrony osobistej i bezpieczeństwa'
                ])
            ],
            [
                'id' => 263,
                'parent_id' => 16,
                'slug' => 'pet-services',
                'name' => 'Pet Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pet Services',
                    'de' => 'Haustierdienstleistungen',
                    'es' => 'Servicios para Mascotas',
                    'pl' => 'Usługi dla Zwierząt'
                ]),
                'scom' => 'Pet care and animal service businesses',
                'scom_translations' => json_encode([
                    'en' => 'Pet care and animal service businesses',
                    'de' => 'Haustierpflege- und Tierdienstleistungsunternehmen',
                    'es' => 'Empresas de cuidado de mascotas y servicios para animales',
                    'pl' => 'Firmy opieki nad zwierzętami i usług dla zwierząt'
                ])
            ],
            [
                'id' => 264,
                'parent_id' => 16,
                'slug' => 'childcare-services',
                'name' => 'Childcare Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Childcare Services',
                    'de' => 'Kinderbetreuungsdienste',
                    'es' => 'Servicios de Cuidado Infantil',
                    'pl' => 'Usługi Opieki nad Dziećmi'
                ]),
                'scom' => 'Babysitting and childcare service providers',
                'scom_translations' => json_encode([
                    'en' => 'Babysitting and childcare service providers',
                    'de' => 'Babysitting- und Kinderbetreuungsdienstleister',
                    'es' => 'Proveedores de servicios de niñera y cuidado infantil',
                    'pl' => 'Dostawcy usług opieki nad dziećmi i niań'
                ])
            ],
            [
                'id' => 265,
                'parent_id' => 16,
                'slug' => 'elderly-care-services',
                'name' => 'Elderly Care Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Elderly Care Services',
                    'de' => 'Altenpflegedienste',
                    'es' => 'Servicios de Cuidado de Ancianos',
                    'pl' => 'Usługi Opieki nad Osobami Starszymi'
                ]),
                'scom' => 'Senior care and elderly assistance services',
                'scom_translations' => json_encode([
                    'en' => 'Senior care and elderly assistance services',
                    'de' => 'Seniorenpflege und Altenhilfe-Dienstleistungen',
                    'es' => 'Servicios de atención a personas mayores y asistencia a ancianos',
                    'pl' => 'Usługi opieki nad seniorami i pomocy osobom starszym'
                ])
            ],
            [
                'id' => 266,
                'parent_id' => 16,
                'slug' => 'personal-training-coaching',
                'name' => 'Personal Training & Coaching',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Training & Coaching',
                    'de' => 'Personal Training und Coaching',
                    'es' => 'Entrenamiento Personal y Coaching',
                    'pl' => 'Trening Personalny i Coaching'
                ]),
                'scom' => 'Individual fitness training and personal coaching services',
                'scom_translations' => json_encode([
                    'en' => 'Individual fitness training and personal coaching services',
                    'de' => 'Individuelles Fitnesstraining und Personal-Coaching-Dienstleistungen',
                    'es' => 'Servicios de entrenamiento fitness individual y coaching personal',
                    'pl' => 'Indywidualne usługi treningu fitness i coachingu osobistego'
                ])
            ],
            [
                'id' => 267,
                'parent_id' => 16,
                'slug' => 'personal-care-services',
                'name' => 'Personal Care Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Personal Care Services',
                    'de' => 'Körperpflegedienste',
                    'es' => 'Servicios de Cuidado Personal',
                    'pl' => 'Usługi Pielęgnacji Osobistej'
                ]),
                'scom' => 'Beauty and personal grooming services',
                'scom_translations' => json_encode([
                    'en' => 'Beauty and personal grooming services',
                    'de' => 'Schönheits- und Körperpflegedienste',
                    'es' => 'Servicios de belleza y cuidado personal',
                    'pl' => 'Usługi piękności i pielęgnacji osobistej'
                ])
            ],
            [
                'id' => 268,
                'parent_id' => 16,
                'slug' => 'tutoring-services',
                'name' => 'Tutoring Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tutoring Services',
                    'de' => 'Nachhilfedienste',
                    'es' => 'Servicios de Tutoría',
                    'pl' => 'Usługi Korepetycji'
                ]),
                'scom' => 'Private tutoring and educational support services',
                'scom_translations' => json_encode([
                    'en' => 'Private tutoring and educational support services',
                    'de' => 'Private Nachhilfe und Bildungsunterstützungsdienstleistungen',
                    'es' => 'Servicios de tutoría privada y apoyo educativo',
                    'pl' => 'Prywatne korepetycje i usługi wsparcia edukacyjnego'
                ])
            ],
            [
                'id' => 269,
                'parent_id' => 16,
                'slug' => 'others-personal-services',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other personal services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other personal services not listed above',
                    'de' => 'Andere persönliche Dienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios personales no listados arriba',
                    'pl' => 'Inne usługi osobiste niewymienione powyżej'
                ])
            ],
            [
                'id' => 270,
                'parent_id' => 17,
                'slug' => 'farming-agriculture',
                'name' => 'Farming/Agriculture',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Farming/Agriculture',
                    'de' => 'Landwirtschaft/Ackerbau',
                    'es' => 'Agricultura/Cultivo',
                    'pl' => 'Rolnictwo/Uprawa'
                ]),
                'scom' => 'Crop production and agricultural farming services',
                'scom_translations' => json_encode([
                    'en' => 'Crop production and agricultural farming services',
                    'de' => 'Pflanzenproduktion und landwirtschaftliche Anbaudienstleistungen',
                    'es' => 'Servicios de producción de cultivos y agricultura',
                    'pl' => 'Usługi produkcji roślinnej i rolnictwa'
                ])
            ],
            [
                'id' => 271,
                'parent_id' => 17,
                'slug' => 'sustainable-products',
                'name' => 'Sustainable Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sustainable Products',
                    'de' => 'Nachhaltige Produkte',
                    'es' => 'Productos Sostenibles',
                    'pl' => 'Produkty Zrównoważone'
                ]),
                'scom' => 'Eco-friendly and sustainable product development',
                'scom_translations' => json_encode([
                    'en' => 'Eco-friendly and sustainable product development',
                    'de' => 'Umweltfreundliche und nachhaltige Produktentwicklung',
                    'es' => 'Desarrollo de productos ecológicos y sostenibles',
                    'pl' => 'Rozwój produktów ekologicznych i zrównoważonych'
                ])
            ],
            [
                'id' => 272,
                'parent_id' => 17,
                'slug' => 'environmental-consulting',
                'name' => 'Environmental Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Environmental Consulting',
                    'de' => 'Umweltberatung',
                    'es' => 'Consultoría Ambiental',
                    'pl' => 'Doradztwo Środowiskowe'
                ]),
                'scom' => 'Environmental impact assessment and consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Environmental impact assessment and consulting services',
                    'de' => 'Umweltverträglichkeitsprüfung und Beratungsdienstleistungen',
                    'es' => 'Servicios de evaluación de impacto ambiental y consultoría',
                    'pl' => 'Usługi oceny oddziaływania na środowisko i doradztwa'
                ])
            ],
            [
                'id' => 273,
                'parent_id' => 17,
                'slug' => 'green-technology',
                'name' => 'Green Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Green Technology',
                    'de' => 'Grüne Technologie',
                    'es' => 'Tecnología Verde',
                    'pl' => 'Zielona Technologia'
                ]),
                'scom' => 'Environmental technology and clean tech solutions',
                'scom_translations' => json_encode([
                    'en' => 'Environmental technology and clean tech solutions',
                    'de' => 'Umwelttechnologie und Clean-Tech-Lösungen',
                    'es' => 'Tecnología ambiental y soluciones de tecnología limpia',
                    'pl' => 'Technologia środowiskowa i rozwiązania czystych technologii'
                ])
            ],
            [
                'id' => 274,
                'parent_id' => 17,
                'slug' => 'renewable-energy',
                'name' => 'Renewable Energy',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Renewable Energy',
                    'de' => 'Erneuerbare Energie',
                    'es' => 'Energía Renovable',
                    'pl' => 'Energia Odnawialna'
                ]),
                'scom' => 'Solar, wind and renewable energy solutions',
                'scom_translations' => json_encode([
                    'en' => 'Solar, wind and renewable energy solutions',
                    'de' => 'Solar-, Wind- und erneuerbare Energielösungen',
                    'es' => 'Soluciones de energía solar, eólica y renovable',
                    'pl' => 'Rozwiązania energii słonecznej, wiatrowej i odnawialnej'
                ])
            ],
            [
                'id' => 275,
                'parent_id' => 17,
                'slug' => 'waste-management',
                'name' => 'Waste Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Waste Management',
                    'de' => 'Abfallwirtschaft',
                    'es' => 'Gestión de Residuos',
                    'pl' => 'Zarządzanie Odpadami'
                ]),
                'scom' => 'Waste collection, recycling and disposal services',
                'scom_translations' => json_encode([
                    'en' => 'Waste collection, recycling and disposal services',
                    'de' => 'Abfallsammlung, Recycling und Entsorgungsdienstleistungen',
                    'es' => 'Servicios de recolección, reciclaje y eliminación de residuos',
                    'pl' => 'Usługi zbiórki, recyklingu i utylizacji odpadów'
                ])
            ],
            [
                'id' => 276,
                'parent_id' => 17,
                'slug' => 'water-services',
                'name' => 'Water Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Water Services',
                    'de' => 'Wasserdienstleistungen',
                    'es' => 'Servicios de Agua',
                    'pl' => 'Usługi Wodne'
                ]),
                'scom' => 'Water treatment and management services',
                'scom_translations' => json_encode([
                    'en' => 'Water treatment and management services',
                    'de' => 'Wasseraufbereitung und Managementdienstleistungen',
                    'es' => 'Servicios de tratamiento y gestión del agua',
                    'pl' => 'Usługi uzdatniania i zarządzania wodą'
                ])
            ],
            [
                'id' => 277,
                'parent_id' => 17,
                'slug' => 'conservation-services',
                'name' => 'Conservation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Conservation Services',
                    'de' => 'Naturschutzdienstleistungen',
                    'es' => 'Servicios de Conservación',
                    'pl' => 'Usługi Ochrony Przyrody'
                ]),
                'scom' => 'Wildlife and habitat conservation services',
                'scom_translations' => json_encode([
                    'en' => 'Wildlife and habitat conservation services',
                    'de' => 'Wildtier- und Lebensraumschutzdienstleistungen',
                    'es' => 'Servicios de conservación de vida silvestre y hábitat',
                    'pl' => 'Usługi ochrony dzikiej przyrody i siedlisk'
                ])
            ],
            [
                'id' => 278,
                'parent_id' => 17,
                'slug' => 'organic-products',
                'name' => 'Organic Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Organic Products',
                    'de' => 'Bio-Produkte',
                    'es' => 'Productos Orgánicos',
                    'pl' => 'Produkty Organiczne'
                ]),
                'scom' => 'Organic food and product manufacturing',
                'scom_translations' => json_encode([
                    'en' => 'Organic food and product manufacturing',
                    'de' => 'Bio-Lebensmittel und Produktherstellung',
                    'es' => 'Fabricación de alimentos y productos orgánicos',
                    'pl' => 'Produkcja żywności i produktów organicznych'
                ])
            ],
            [
                'id' => 279,
                'parent_id' => 17,
                'slug' => 'environmental-education',
                'name' => 'Environmental Education',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Environmental Education',
                    'de' => 'Umweltbildung',
                    'es' => 'Educación Ambiental',
                    'pl' => 'Edukacja Środowiskowa'
                ]),
                'scom' => 'Environmental awareness and education services',
                'scom_translations' => json_encode([
                    'en' => 'Environmental awareness and education services',
                    'de' => 'Umweltbewusstsein und Bildungsdienstleistungen',
                    'es' => 'Servicios de concienciación y educación ambiental',
                    'pl' => 'Usługi świadomości i edukacji środowiskowej'
                ])
            ],
            [
                'id' => 280,
                'parent_id' => 17,
                'slug' => 'carbon-offset-services',
                'name' => 'Carbon Offset Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Carbon Offset Services',
                    'de' => 'CO2-Kompensationsdienste',
                    'es' => 'Servicios de Compensación de Carbono',
                    'pl' => 'Usługi Kompensacji Węgla'
                ]),
                'scom' => 'Carbon footprint reduction and offset programs',
                'scom_translations' => json_encode([
                    'en' => 'Carbon footprint reduction and offset programs',
                    'de' => 'CO2-Fußabdruck-Reduzierung und Kompensationsprogramme',
                    'es' => 'Programas de reducción y compensación de huella de carbono',
                    'pl' => 'Programy redukcji i kompensacji śladu węglowego'
                ])
            ],
            [
                'id' => 281,
                'parent_id' => 17,
                'slug' => 'aquaculture-fisheries',
                'name' => 'Aquaculture & Fisheries',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Aquaculture & Fisheries',
                    'de' => 'Aquakultur und Fischerei',
                    'es' => 'Acuicultura y Pesquerías',
                    'pl' => 'Akwakultura i Rybołówstwo'
                ]),
                'scom' => 'Fish farming and aquaculture production services',
                'scom_translations' => json_encode([
                    'en' => 'Fish farming and aquaculture production services',
                    'de' => 'Fischzucht und Aquakultur-Produktionsdienstleistungen',
                    'es' => 'Servicios de piscicultura y producción acuícola',
                    'pl' => 'Usługi hodowli ryb i produkcji akwakultury'
                ])
            ],
            [
                'id' => 282,
                'parent_id' => 17,
                'slug' => 'forestry-services',
                'name' => 'Forestry Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Forestry Services',
                    'de' => 'Forstwirtschaftsdienste',
                    'es' => 'Servicios Forestales',
                    'pl' => 'Usługi Leśne'
                ]),
                'scom' => 'Forest management and timber production services',
                'scom_translations' => json_encode([
                    'en' => 'Forest management and timber production services',
                    'de' => 'Waldmanagement und Holzproduktionsdienstleistungen',
                    'es' => 'Servicios de gestión forestal y producción maderera',
                    'pl' => 'Usługi zarządzania lasami i produkcji drewna'
                ])
            ],
            [
                'id' => 283,
                'parent_id' => 17,
                'slug' => 'climate-tech',
                'name' => 'Climate Tech',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Climate Tech',
                    'de' => 'Klimatechnologie',
                    'es' => 'Tecnología Climática',
                    'pl' => 'Technologia Klimatyczna'
                ]),
                'scom' => 'Climate change mitigation technology solutions',
                'scom_translations' => json_encode([
                    'en' => 'Climate change mitigation technology solutions',
                    'de' => 'Technologische Lösungen zur Klimawandelminderung',
                    'es' => 'Soluciones tecnológicas de mitigación del cambio climático',
                    'pl' => 'Rozwiązania technologiczne łagodzenia zmian klimatu'
                ])
            ],
            [
                'id' => 284,
                'parent_id' => 17,
                'slug' => 'others-agriculture-environment',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other agriculture and environment services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other agriculture and environment services not listed above',
                    'de' => 'Andere Landwirtschafts- und Umweltdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de agricultura y medio ambiente no listados arriba',
                    'pl' => 'Inne usługi rolnicze i środowiskowe niewymienione powyżej'
                ])
            ],
            [
                'id' => 285,
                'parent_id' => 18,
                'slug' => 'car-dealership',
                'name' => 'Car Dealership',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Car Dealership',
                    'de' => 'Autohaus',
                    'es' => 'Concesionario de Autos',
                    'pl' => 'Salon Samochodowy'
                ]),
                'scom' => 'New and used vehicle sales and dealership services',
                'scom_translations' => json_encode([
                    'en' => 'New and used vehicle sales and dealership services',
                    'de' => 'Neu- und Gebrauchtwagen-Verkauf und Autohaus-Dienstleistungen',
                    'es' => 'Servicios de venta de vehículos nuevos y usados y concesionario',
                    'pl' => 'Usługi sprzedaży nowych i używanych pojazdów oraz salonu samochodowego'
                ])
            ],
            [
                'id' => 286,
                'parent_id' => 18,
                'slug' => 'auto-repair-services',
                'name' => 'Auto Repair Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Auto Repair Services',
                    'de' => 'Autoreparatur-Dienstleistungen',
                    'es' => 'Servicios de Reparación de Autos',
                    'pl' => 'Usługi Naprawy Samochodów'
                ]),
                'scom' => 'Vehicle maintenance and automotive repair services',
                'scom_translations' => json_encode([
                    'en' => 'Vehicle maintenance and automotive repair services',
                    'de' => 'Fahrzeugwartung und Autoreparatur-Dienstleistungen',
                    'es' => 'Servicios de mantenimiento de vehículos y reparación automotriz',
                    'pl' => 'Usługi konserwacji pojazdów i napraw samochodowych'
                ])
            ],
            [
                'id' => 287,
                'parent_id' => 18,
                'slug' => 'car-rental',
                'name' => 'Car Rental',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Car Rental',
                    'de' => 'Autovermietung',
                    'es' => 'Alquiler de Autos',
                    'pl' => 'Wynajem Samochodów'
                ]),
                'scom' => 'Vehicle rental and car sharing services',
                'scom_translations' => json_encode([
                    'en' => 'Vehicle rental and car sharing services',
                    'de' => 'Fahrzeugvermietung und Car-Sharing-Dienstleistungen',
                    'es' => 'Servicios de alquiler de vehículos y car sharing',
                    'pl' => 'Usługi wynajmu pojazdów i car sharingu'
                ])
            ],
            [
                'id' => 288,
                'parent_id' => 18,
                'slug' => 'auto-detailing',
                'name' => 'Auto Detailing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Auto Detailing',
                    'de' => 'Autopflege',
                    'es' => 'Detallado de Autos',
                    'pl' => 'Detailing Samochodowy'
                ]),
                'scom' => 'Professional car cleaning and detailing services',
                'scom_translations' => json_encode([
                    'en' => 'Professional car cleaning and detailing services',
                    'de' => 'Professionelle Autoreinigung und Autopflege-Dienstleistungen',
                    'es' => 'Servicios profesionales de limpieza y detallado de autos',
                    'pl' => 'Profesjonalne usługi czyszczenia i detailingu samochodów'
                ])
            ],
            [
                'id' => 289,
                'parent_id' => 18,
                'slug' => 'vehicle-customization',
                'name' => 'Vehicle Customization',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Vehicle Customization',
                    'de' => 'Fahrzeug-Individualisierung',
                    'es' => 'Personalización de Vehículos',
                    'pl' => 'Personalizacja Pojazdów'
                ]),
                'scom' => 'Custom vehicle modifications and tuning services',
                'scom_translations' => json_encode([
                    'en' => 'Custom vehicle modifications and tuning services',
                    'de' => 'Kundenspezifische Fahrzeugmodifikationen und Tuning-Dienstleistungen',
                    'es' => 'Servicios de modificaciones personalizadas de vehículos y tuning',
                    'pl' => 'Usługi niestandardowych modyfikacji pojazdów i tuningu'
                ])
            ],
            [
                'id' => 290,
                'parent_id' => 18,
                'slug' => 'auto-parts',
                'name' => 'Auto Parts',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Auto Parts',
                    'de' => 'Autoteile',
                    'es' => 'Repuestos de Autos',
                    'pl' => 'Części Samochodowe'
                ]),
                'scom' => 'Automotive parts sales and distribution',
                'scom_translations' => json_encode([
                    'en' => 'Automotive parts sales and distribution',
                    'de' => 'Autoteile-Verkauf und -Vertrieb',
                    'es' => 'Venta y distribución de repuestos automotrices',
                    'pl' => 'Sprzedaż i dystrybucja części samochodowych'
                ])
            ],
            [
                'id' => 291,
                'parent_id' => 18,
                'slug' => 'transportation-services',
                'name' => 'Transportation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Transportation Services',
                    'de' => 'Transportdienstleistungen',
                    'es' => 'Servicios de Transporte',
                    'pl' => 'Usługi Transportowe'
                ]),
                'scom' => 'Ride-sharing and passenger transportation services',
                'scom_translations' => json_encode([
                    'en' => 'Ride-sharing and passenger transportation services',
                    'de' => 'Ride-Sharing und Personentransport-Dienstleistungen',
                    'es' => 'Servicios de ride-sharing y transporte de pasajeros',
                    'pl' => 'Usługi ride-sharingu i transportu pasażerskiego'
                ])
            ],
            [
                'id' => 292,
                'parent_id' => 18,
                'slug' => 'fleet-services',
                'name' => 'Fleet Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fleet Services',
                    'de' => 'Fuhrpark-Dienstleistungen',
                    'es' => 'Servicios de Flotas',
                    'pl' => 'Usługi Floty'
                ]),
                'scom' => 'Commercial fleet management and maintenance services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial fleet management and maintenance services',
                    'de' => 'Gewerbliches Fuhrpark-Management und Wartungsdienstleistungen',
                    'es' => 'Servicios de gestión y mantenimiento de flotas comerciales',
                    'pl' => 'Usługi zarządzania i konserwacji floty komercyjnej'
                ])
            ],
            [
                'id' => 293,
                'parent_id' => 18,
                'slug' => 'automotive-technology',
                'name' => 'Automotive Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Automotive Technology',
                    'de' => 'Automobiltechnologie',
                    'es' => 'Tecnología Automotriz',
                    'pl' => 'Technologia Motoryzacyjna'
                ]),
                'scom' => 'Automotive tech solutions and vehicle software services',
                'scom_translations' => json_encode([
                    'en' => 'Automotive tech solutions and vehicle software services',
                    'de' => 'Automobiltechnologie-Lösungen und Fahrzeug-Software-Dienstleistungen',
                    'es' => 'Soluciones de tecnología automotriz y servicios de software vehicular',
                    'pl' => 'Rozwiązania technologii motoryzacyjnej i usługi oprogramowania pojazdów'
                ])
            ],
            [
                'id' => 294,
                'parent_id' => 18,
                'slug' => 'car-wash-services',
                'name' => 'Car Wash Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Car Wash Services',
                    'de' => 'Autowaschdienste',
                    'es' => 'Servicios de Lavado de Autos',
                    'pl' => 'Usługi Myjni Samochodowych'
                ]),
                'scom' => 'Automated and manual car washing services',
                'scom_translations' => json_encode([
                    'en' => 'Automated and manual car washing services',
                    'de' => 'Automatische und manuelle Autowaschdienstleistungen',
                    'es' => 'Servicios de lavado de autos automatizado y manual',
                    'pl' => 'Zautomatyzowane i ręczne usługi mycia samochodów'
                ])
            ],
            [
                'id' => 295,
                'parent_id' => 18,
                'slug' => 'tire-services',
                'name' => 'Tire Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tire Services',
                    'de' => 'Reifendienste',
                    'es' => 'Servicios de Neumáticos',
                    'pl' => 'Usługi Opon'
                ]),
                'scom' => 'Tire sales, installation and maintenance services',
                'scom_translations' => json_encode([
                    'en' => 'Tire sales, installation and maintenance services',
                    'de' => 'Reifenverkauf, -montage und -wartungsdienstleistungen',
                    'es' => 'Servicios de venta, instalación y mantenimiento de neumáticos',
                    'pl' => 'Usługi sprzedaży, montażu i konserwacji opon'
                ])
            ],
            [
                'id' => 296,
                'parent_id' => 18,
                'slug' => 'electric-vehicle-services',
                'name' => 'Electric Vehicle Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Electric Vehicle Services',
                    'de' => 'Elektrofahrzeug-Dienstleistungen',
                    'es' => 'Servicios de Vehículos Eléctricos',
                    'pl' => 'Usługi Pojazdów Elektrycznych'
                ]),
                'scom' => 'EV charging stations and electric vehicle services',
                'scom_translations' => json_encode([
                    'en' => 'EV charging stations and electric vehicle services',
                    'de' => 'EV-Ladestationen und Elektrofahrzeug-Dienstleistungen',
                    'es' => 'Estaciones de carga de VE y servicios de vehículos eléctricos',
                    'pl' => 'Stacje ładowania pojazdów elektrycznych i usługi EV'
                ])
            ],
            [
                'id' => 297,
                'parent_id' => 18,
                'slug' => 'automotive-insurance',
                'name' => 'Automotive Insurance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Automotive Insurance',
                    'de' => 'Kfz-Versicherung',
                    'es' => 'Seguro Automotriz',
                    'pl' => 'Ubezpieczenia Samochodowe'
                ]),
                'scom' => 'Vehicle insurance and automotive coverage services',
                'scom_translations' => json_encode([
                    'en' => 'Vehicle insurance and automotive coverage services',
                    'de' => 'Fahrzeugversicherung und Kfz-Versicherungsdienstleistungen',
                    'es' => 'Servicios de seguro de vehículos y cobertura automotriz',
                    'pl' => 'Usługi ubezpieczeń pojazdów i ochrony motoryzacyjnej'
                ])
            ],
            [
                'id' => 298,
                'parent_id' => 18,
                'slug' => 'roadside-assistance',
                'name' => 'Roadside Assistance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Roadside Assistance',
                    'de' => 'Pannenhilfe',
                    'es' => 'Asistencia en Carretera',
                    'pl' => 'Pomoc Drogowa'
                ]),
                'scom' => 'Emergency roadside and towing services',
                'scom_translations' => json_encode([
                    'en' => 'Emergency roadside and towing services',
                    'de' => 'Notfall-Pannenhilfe und Abschleppdienstleistungen',
                    'es' => 'Servicios de emergencia en carretera y remolque',
                    'pl' => 'Usługi pomocy drogowej i holowania awaryjnego'
                ])
            ],
            [
                'id' => 299,
                'parent_id' => 18,
                'slug' => 'others-automotive-services',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other automotive services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other automotive services not listed above',
                    'de' => 'Andere Automobil-Dienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios automotrices no listados arriba',
                    'pl' => 'Inne usługi motoryzacyjne niewymienione powyżej'
                ])
            ],
            [
                'id' => 300,
                'parent_id' => 19,
                'slug' => 'home-improvement',
                'name' => 'Home Improvement',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home Improvement',
                    'de' => 'Hausverbesserung',
                    'es' => 'Mejoras del Hogar',
                    'pl' => 'Ulepszenia Domu'
                ]),
                'scom' => 'Home renovation and improvement services',
                'scom_translations' => json_encode([
                    'en' => 'Home renovation and improvement services',
                    'de' => 'Hausrenovierung und Verbesserungsdienstleistungen',
                    'es' => 'Servicios de renovación y mejoras del hogar',
                    'pl' => 'Usługi renowacji i ulepszeń domu'
                ])
            ],
            [
                'id' => 301,
                'parent_id' => 19,
                'slug' => 'furniture-decor',
                'name' => 'Furniture/Decor',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Furniture/Decor',
                    'de' => 'Möbel/Dekoration',
                    'es' => 'Muebles/Decoración',
                    'pl' => 'Meble/Dekoracje'
                ]),
                'scom' => 'Furniture retail and home decoration services',
                'scom_translations' => json_encode([
                    'en' => 'Furniture retail and home decoration services',
                    'de' => 'Möbelhandel und Hausdekorationsdienstleistungen',
                    'es' => 'Servicios de retail de muebles y decoración del hogar',
                    'pl' => 'Sprzedaż detaliczna mebli i usługi dekoracji domu'
                ])
            ],
            [
                'id' => 302,
                'parent_id' => 19,
                'slug' => 'gardening-services',
                'name' => 'Gardening Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Gardening Services',
                    'de' => 'Gartenbau-Dienstleistungen',
                    'es' => 'Servicios de Jardinería',
                    'pl' => 'Usługi Ogrodnicze'
                ]),
                'scom' => 'Garden design and horticultural services',
                'scom_translations' => json_encode([
                    'en' => 'Garden design and horticultural services',
                    'de' => 'Gartendesign und Gartenbau-Dienstleistungen',
                    'es' => 'Servicios de diseño de jardines y horticultura',
                    'pl' => 'Usługi projektowania ogrodów i ogrodnictwa'
                ])
            ],
            [
                'id' => 303,
                'parent_id' => 19,
                'slug' => 'home-organization',
                'name' => 'Home Organization',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home Organization',
                    'de' => 'Hausorganisation',
                    'es' => 'Organización del Hogar',
                    'pl' => 'Organizacja Domu'
                ]),
                'scom' => 'Professional organizing and decluttering services',
                'scom_translations' => json_encode([
                    'en' => 'Professional organizing and decluttering services',
                    'de' => 'Professionelle Organisations- und Entrümpelungsdienstleistungen',
                    'es' => 'Servicios profesionales de organización y orden',
                    'pl' => 'Profesjonalne usługi organizacji i porządkowania'
                ])
            ],
            [
                'id' => 304,
                'parent_id' => 19,
                'slug' => 'security-services',
                'name' => 'Security Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Security Services',
                    'de' => 'Sicherheitsdienste',
                    'es' => 'Servicios de Seguridad',
                    'pl' => 'Usługi Bezpieczeństwa'
                ]),
                'scom' => 'Home security systems and monitoring services',
                'scom_translations' => json_encode([
                    'en' => 'Home security systems and monitoring services',
                    'de' => 'Haussicherheitssysteme und Überwachungsdienstleistungen',
                    'es' => 'Sistemas de seguridad del hogar y servicios de monitoreo',
                    'pl' => 'Systemy bezpieczeństwa domu i usługi monitoringu'
                ])
            ],
            [
                'id' => 305,
                'parent_id' => 19,
                'slug' => 'smart-home-services',
                'name' => 'Smart Home Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Smart Home Services',
                    'de' => 'Smart-Home-Dienstleistungen',
                    'es' => 'Servicios de Hogar Inteligente',
                    'pl' => 'Usługi Inteligentnego Domu'
                ]),
                'scom' => 'Home automation and smart technology installation',
                'scom_translations' => json_encode([
                    'en' => 'Home automation and smart technology installation',
                    'de' => 'Hausautomatisierung und Smart-Technologie-Installation',
                    'es' => 'Automatización del hogar e instalación de tecnología inteligente',
                    'pl' => 'Automatyzacja domu i instalacja inteligentnych technologii'
                ])
            ],
            [
                'id' => 306,
                'parent_id' => 19,
                'slug' => 'landscaping',
                'name' => 'Landscaping',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Landscaping',
                    'de' => 'Landschaftsgestaltung',
                    'es' => 'Paisajismo',
                    'pl' => 'Architektura Krajobrazu'
                ]),
                'scom' => 'Landscape design and outdoor space planning',
                'scom_translations' => json_encode([
                    'en' => 'Landscape design and outdoor space planning',
                    'de' => 'Landschaftsdesign und Außenraumplanung',
                    'es' => 'Diseño paisajístico y planificación de espacios exteriores',
                    'pl' => 'Projektowanie krajobrazu i planowanie przestrzeni zewnętrznych'
                ])
            ],
            [
                'id' => 307,
                'parent_id' => 19,
                'slug' => 'pool-services',
                'name' => 'Pool Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pool Services',
                    'de' => 'Pool-Dienstleistungen',
                    'es' => 'Servicios de Piscina',
                    'pl' => 'Usługi Basenowe'
                ]),
                'scom' => 'Swimming pool maintenance and installation services',
                'scom_translations' => json_encode([
                    'en' => 'Swimming pool maintenance and installation services',
                    'de' => 'Schwimmbad-Wartung und Installationsdienstleistungen',
                    'es' => 'Servicios de mantenimiento e instalación de piscinas',
                    'pl' => 'Usługi konserwacji i instalacji basenów pływackich'
                ])
            ],
            [
                'id' => 308,
                'parent_id' => 19,
                'slug' => 'home-maintenance',
                'name' => 'Home Maintenance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home Maintenance',
                    'de' => 'Hauswartung',
                    'es' => 'Mantenimiento del Hogar',
                    'pl' => 'Konserwacja Domu'
                ]),
                'scom' => 'Regular home upkeep and maintenance services',
                'scom_translations' => json_encode([
                    'en' => 'Regular home upkeep and maintenance services',
                    'de' => 'Regelmäßige Hauspflege und Wartungsdienstleistungen',
                    'es' => 'Servicios regulares de cuidado y mantenimiento del hogar',
                    'pl' => 'Regularne usługi pielęgnacji i konserwacji domu'
                ])
            ],
            [
                'id' => 309,
                'parent_id' => 19,
                'slug' => 'utility-services',
                'name' => 'Utility Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Utility Services',
                    'de' => 'Versorgungsdienstleistungen',
                    'es' => 'Servicios de Utilidades',
                    'pl' => 'Usługi Użyteczności Publicznej'
                ]),
                'scom' => 'Home utility management and energy services',
                'scom_translations' => json_encode([
                    'en' => 'Home utility management and energy services',
                    'de' => 'Hausversorgungsmanagement und Energiedienstleistungen',
                    'es' => 'Servicios de gestión de utilidades del hogar y energía',
                    'pl' => 'Usługi zarządzania mediami domowymi i energią'
                ])
            ],
            [
                'id' => 310,
                'parent_id' => 19,
                'slug' => 'interior-styling',
                'name' => 'Interior Styling',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Interior Styling',
                    'de' => 'Innenausstattung',
                    'es' => 'Estilismo de Interiores',
                    'pl' => 'Stylizacja Wnętrz'
                ]),
                'scom' => 'Interior design consulting and styling services',
                'scom_translations' => json_encode([
                    'en' => 'Interior design consulting and styling services',
                    'de' => 'Innenarchitektur-Beratung und Styling-Dienstleistungen',
                    'es' => 'Servicios de consultoría de diseño interior y estilismo',
                    'pl' => 'Usługi konsultacji projektowania wnętrz i stylizacji'
                ])
            ],
            [
                'id' => 311,
                'parent_id' => 19,
                'slug' => 'lifestyle-coaching',
                'name' => 'Lifestyle Coaching',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lifestyle Coaching',
                    'de' => 'Lifestyle-Coaching',
                    'es' => 'Coaching de Estilo de Vida',
                    'pl' => 'Coaching Stylu Życia'
                ]),
                'scom' => 'Personal lifestyle improvement and wellness coaching',
                'scom_translations' => json_encode([
                    'en' => 'Personal lifestyle improvement and wellness coaching',
                    'de' => 'Persönliche Lifestyle-Verbesserung und Wellness-Coaching',
                    'es' => 'Coaching de mejora del estilo de vida personal y bienestar',
                    'pl' => 'Coaching poprawy osobistego stylu życia i wellness'
                ])
            ],
            [
                'id' => 312,
                'parent_id' => 19,
                'slug' => 'home-energy-solutions',
                'name' => 'Home Energy Solutions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home Energy Solutions',
                    'de' => 'Hausenergie-Lösungen',
                    'es' => 'Soluciones de Energía del Hogar',
                    'pl' => 'Rozwiązania Energetyczne dla Domu'
                ]),
                'scom' => 'Energy efficiency and renewable energy solutions for homes',
                'scom_translations' => json_encode([
                    'en' => 'Energy efficiency and renewable energy solutions for homes',
                    'de' => 'Energieeffizienz und erneuerbare Energielösungen für Häuser',
                    'es' => 'Soluciones de eficiencia energética y energía renovable para hogares',
                    'pl' => 'Rozwiązania efektywności energetycznej i energii odnawialnej dla domów'
                ])
            ],
            [
                'id' => 313,
                'parent_id' => 19,
                'slug' => 'home-technology',
                'name' => 'Home Technology',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Home Technology',
                    'de' => 'Haustechnologie',
                    'es' => 'Tecnología del Hogar',
                    'pl' => 'Technologia Domowa'
                ]),
                'scom' => 'Home entertainment and technology integration services',
                'scom_translations' => json_encode([
                    'en' => 'Home entertainment and technology integration services',
                    'de' => 'Hausunterhaltung und Technologie-Integrationsdienstleistungen',
                    'es' => 'Servicios de entretenimiento del hogar e integración tecnológica',
                    'pl' => 'Usługi rozrywki domowej i integracji technologicznej'
                ])
            ],
            [
                'id' => 314,
                'parent_id' => 19,
                'slug' => 'others-home-lifestyle',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other home and lifestyle services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other home and lifestyle services not listed above',
                    'de' => 'Andere Haus- und Lifestyle-Dienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de hogar y estilo de vida no listados arriba',
                    'pl' => 'Inne usługi domowe i stylu życia niewymienione powyżej'
                ])
            ],
            [
                'id' => 315,
                'parent_id' => 20,
                'slug' => 'sports-coaching',
                'name' => 'Sports Coaching',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports Coaching',
                    'de' => 'Sport-Coaching',
                    'es' => 'Entrenamiento Deportivo',
                    'pl' => 'Coaching Sportowy'
                ]),
                'scom' => 'Professional sports training and coaching services',
                'scom_translations' => json_encode([
                    'en' => 'Professional sports training and coaching services',
                    'de' => 'Professionelle Sporttraining- und Coaching-Dienstleistungen',
                    'es' => 'Servicios profesionales de entrenamiento deportivo y coaching',
                    'pl' => 'Profesjonalne usługi treningu sportowego i coachingu'
                ])
            ],
            [
                'id' => 316,
                'parent_id' => 20,
                'slug' => 'fitness-equipment',
                'name' => 'Fitness Equipment',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fitness Equipment',
                    'de' => 'Fitnessgeräte',
                    'es' => 'Equipo de Fitness',
                    'pl' => 'Sprzęt Fitness'
                ]),
                'scom' => 'Fitness equipment sales and rental services',
                'scom_translations' => json_encode([
                    'en' => 'Fitness equipment sales and rental services',
                    'de' => 'Fitnessgeräte-Verkauf und Vermietungsdienstleistungen',
                    'es' => 'Servicios de venta y alquiler de equipo de fitness',
                    'pl' => 'Usługi sprzedaży i wynajmu sprzętu fitness'
                ])
            ],
            [
                'id' => 317,
                'parent_id' => 20,
                'slug' => 'sports-events',
                'name' => 'Sports Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports Events',
                    'de' => 'Sportveranstaltungen',
                    'es' => 'Eventos Deportivos',
                    'pl' => 'Wydarzenia Sportowe'
                ]),
                'scom' => 'Sports event organization and management services',
                'scom_translations' => json_encode([
                    'en' => 'Sports event organization and management services',
                    'de' => 'Sportveranstaltungsorganisation und Managementdienstleistungen',
                    'es' => 'Servicios de organización y gestión de eventos deportivos',
                    'pl' => 'Usługi organizacji i zarządzania wydarzeniami sportowymi'
                ])
            ],
            [
                'id' => 318,
                'parent_id' => 20,
                'slug' => 'recreation-programs',
                'name' => 'Recreation Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Recreation Programs',
                    'de' => 'Freizeitprogramme',
                    'es' => 'Programas Recreativos',
                    'pl' => 'Programy Rekreacyjne'
                ]),
                'scom' => 'Community recreation and leisure activity programs',
                'scom_translations' => json_encode([
                    'en' => 'Community recreation and leisure activity programs',
                    'de' => 'Gemeinschaftsfreizeit- und Freizeitaktivitätsprogramme',
                    'es' => 'Programas comunitarios de recreación y actividades de ocio',
                    'pl' => 'Programy rekreacji społecznej i aktywności wypoczynkowych'
                ])
            ],
            [
                'id' => 319,
                'parent_id' => 20,
                'slug' => 'athletic-training',
                'name' => 'Athletic Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Athletic Training',
                    'de' => 'Athletiktraining',
                    'es' => 'Entrenamiento Atlético',
                    'pl' => 'Trening Atletyczny'
                ]),
                'scom' => 'Performance training and athletic development services',
                'scom_translations' => json_encode([
                    'en' => 'Performance training and athletic development services',
                    'de' => 'Leistungstraining und athletische Entwicklungsdienstleistungen',
                    'es' => 'Servicios de entrenamiento de rendimiento y desarrollo atlético',
                    'pl' => 'Usługi treningu wydajności i rozwoju atletycznego'
                ])
            ],
            [
                'id' => 320,
                'parent_id' => 20,
                'slug' => 'sports-medicine',
                'name' => 'Sports Medicine',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports Medicine',
                    'de' => 'Sportmedizin',
                    'es' => 'Medicina Deportiva',
                    'pl' => 'Medycyna Sportowa'
                ]),
                'scom' => 'Sports injury treatment and rehabilitation services',
                'scom_translations' => json_encode([
                    'en' => 'Sports injury treatment and rehabilitation services',
                    'de' => 'Sportverletzungsbehandlung und Rehabilitationsdienstleistungen',
                    'es' => 'Servicios de tratamiento de lesiones deportivas y rehabilitación',
                    'pl' => 'Usługi leczenia urazów sportowych i rehabilitacji'
                ])
            ],
            [
                'id' => 321,
                'parent_id' => 20,
                'slug' => 'equipment-rental',
                'name' => 'Equipment Rental',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Equipment Rental',
                    'de' => 'Ausrüstungsverleih',
                    'es' => 'Alquiler de Equipos',
                    'pl' => 'Wynajem Sprzętu'
                ]),
                'scom' => 'Sports and recreation equipment rental services',
                'scom_translations' => json_encode([
                    'en' => 'Sports and recreation equipment rental services',
                    'de' => 'Sport- und Freizeitausrüstungs-Vermietungsdienstleistungen',
                    'es' => 'Servicios de alquiler de equipo deportivo y recreativo',
                    'pl' => 'Usługi wynajmu sprzętu sportowego i rekreacyjnego'
                ])
            ],
            [
                'id' => 322,
                'parent_id' => 20,
                'slug' => 'sports-facilities',
                'name' => 'Sports Facilities',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports Facilities',
                    'de' => 'Sportanlagen',
                    'es' => 'Instalaciones Deportivas',
                    'pl' => 'Obiekty Sportowe'
                ]),
                'scom' => 'Sports facility management and rental services',
                'scom_translations' => json_encode([
                    'en' => 'Sports facility management and rental services',
                    'de' => 'Sportanlagen-Management und Vermietungsdienstleistungen',
                    'es' => 'Servicios de gestión y alquiler de instalaciones deportivas',
                    'pl' => 'Usługi zarządzania i wynajmu obiektów sportowych'
                ])
            ],
            [
                'id' => 323,
                'parent_id' => 20,
                'slug' => 'adventure-sports',
                'name' => 'Adventure Sports',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Adventure Sports',
                    'de' => 'Abenteuersport',
                    'es' => 'Deportes de Aventura',
                    'pl' => 'Sporty Przygodowe'
                ]),
                'scom' => 'Outdoor adventure and extreme sports services',
                'scom_translations' => json_encode([
                    'en' => 'Outdoor adventure and extreme sports services',
                    'de' => 'Outdoor-Abenteuer und Extremsport-Dienstleistungen',
                    'es' => 'Servicios de aventura al aire libre y deportes extremos',
                    'pl' => 'Usługi przygód na świeżym powietrzu i sportów ekstremalnych'
                ])
            ],
            [
                'id' => 324,
                'parent_id' => 20,
                'slug' => 'team-management',
                'name' => 'Team Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Team Management',
                    'de' => 'Teammanagement',
                    'es' => 'Gestión de Equipos',
                    'pl' => 'Zarządzanie Drużyną'
                ]),
                'scom' => 'Sports team organization and management services',
                'scom_translations' => json_encode([
                    'en' => 'Sports team organization and management services',
                    'de' => 'Sportteam-Organisation und Managementdienstleistungen',
                    'es' => 'Servicios de organización y gestión de equipos deportivos',
                    'pl' => 'Usługi organizacji i zarządzania drużynami sportowymi'
                ])
            ],
            [
                'id' => 325,
                'parent_id' => 20,
                'slug' => 'youth-sports',
                'name' => 'Youth Sports',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Youth Sports',
                    'de' => 'Jugendsport',
                    'es' => 'Deportes Juveniles',
                    'pl' => 'Sport Młodzieżowy'
                ]),
                'scom' => 'Youth sports programs and development services',
                'scom_translations' => json_encode([
                    'en' => 'Youth sports programs and development services',
                    'de' => 'Jugendsportprogramme und Entwicklungsdienstleistungen',
                    'es' => 'Programas de deportes juveniles y servicios de desarrollo',
                    'pl' => 'Programy sportu młodzieżowego i usługi rozwoju'
                ])
            ],
            [
                'id' => 326,
                'parent_id' => 20,
                'slug' => 'fitness-centers',
                'name' => 'Fitness Centers',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fitness Centers',
                    'de' => 'Fitnessstudios',
                    'es' => 'Centros de Fitness',
                    'pl' => 'Centra Fitness'
                ]),
                'scom' => 'Gym and fitness center operations and services',
                'scom_translations' => json_encode([
                    'en' => 'Gym and fitness center operations and services',
                    'de' => 'Fitnessstudio- und Fitness-Center-Betrieb und Dienstleistungen',
                    'es' => 'Operaciones y servicios de gimnasios y centros de fitness',
                    'pl' => 'Działalność i usługi siłowni i centrów fitness'
                ])
            ],
            [
                'id' => 327,
                'parent_id' => 20,
                'slug' => 'sports-nutrition',
                'name' => 'Sports Nutrition',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sports Nutrition',
                    'de' => 'Sporternährung',
                    'es' => 'Nutrición Deportiva',
                    'pl' => 'Żywienie Sportowe'
                ]),
                'scom' => 'Athletic nutrition and supplement services',
                'scom_translations' => json_encode([
                    'en' => 'Athletic nutrition and supplement services',
                    'de' => 'Sporternährung und Nahrungsergänzungsdienstleistungen',
                    'es' => 'Servicios de nutrición atlética y suplementos',
                    'pl' => 'Usługi żywienia sportowego i suplementów'
                ])
            ],
            [
                'id' => 328,
                'parent_id' => 20,
                'slug' => 'water-sports',
                'name' => 'Water Sports',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Water Sports',
                    'de' => 'Wassersport',
                    'es' => 'Deportes Acuáticos',
                    'pl' => 'Sporty Wodne'
                ]),
                'scom' => 'Aquatic sports instruction and equipment services',
                'scom_translations' => json_encode([
                    'en' => 'Aquatic sports instruction and equipment services',
                    'de' => 'Wassersport-Unterricht und Ausrüstungsdienstleistungen',
                    'es' => 'Servicios de instrucción de deportes acuáticos y equipos',
                    'pl' => 'Usługi instruktażu sportów wodnych i sprzętu'
                ])
            ],
            [
                'id' => 329,
                'parent_id' => 20,
                'slug' => 'others-sports-recreation',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other sports and recreation services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other sports and recreation services not listed above',
                    'de' => 'Andere Sport- und Freizeitdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de deportes y recreación no listados arriba',
                    'pl' => 'Inne usługi sportowe i rekreacyjne niewymienione powyżej'
                ])
            ],
            [
                'id' => 330,
                'parent_id' => 21,
                'slug' => 'art-services',
                'name' => 'Art Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Art Services',
                    'de' => 'Kunstdienstleistungen',
                    'es' => 'Servicios de Arte',
                    'pl' => 'Usługi Artystyczne'
                ]),
                'scom' => 'Fine art creation and artistic services',
                'scom_translations' => json_encode([
                    'en' => 'Fine art creation and artistic services',
                    'de' => 'Bildende Kunst und künstlerische Dienstleistungen',
                    'es' => 'Servicios de creación de bellas artes y artísticos',
                    'pl' => 'Usługi tworzenia sztuk pięknych i artystyczne'
                ])
            ],
            [
                'id' => 331,
                'parent_id' => 21,
                'slug' => 'craft-business',
                'name' => 'Craft Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Craft Business',
                    'de' => 'Handwerksunternehmen',
                    'es' => 'Negocio de Manualidades',
                    'pl' => 'Biznes Rękodzielniczy'
                ]),
                'scom' => 'Handmade crafts and artisan product businesses',
                'scom_translations' => json_encode([
                    'en' => 'Handmade crafts and artisan product businesses',
                    'de' => 'Handgefertigte Handwerks- und Handwerkerprodukt-Unternehmen',
                    'es' => 'Negocios de manualidades hechas a mano y productos artesanales',
                    'pl' => 'Firmy rękodzieła i produktów rzemieślniczych'
                ])
            ],
            [
                'id' => 332,
                'parent_id' => 21,
                'slug' => 'music-services',
                'name' => 'Music Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Music Services',
                    'de' => 'Musikdienstleistungen',
                    'es' => 'Servicios Musicales',
                    'pl' => 'Usługi Muzyczne'
                ]),
                'scom' => 'Music instruction and performance services',
                'scom_translations' => json_encode([
                    'en' => 'Music instruction and performance services',
                    'de' => 'Musikunterricht und Aufführungsdienstleistungen',
                    'es' => 'Servicios de instrucción musical y actuación',
                    'pl' => 'Usługi nauczania muzyki i występów'
                ])
            ],
            [
                'id' => 333,
                'parent_id' => 21,
                'slug' => 'performance-arts',
                'name' => 'Performance Arts',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Performance Arts',
                    'de' => 'Darstellende Künste',
                    'es' => 'Artes Escénicas',
                    'pl' => 'Sztuki Performatywne'
                ]),
                'scom' => 'Theater, dance and performance art services',
                'scom_translations' => json_encode([
                    'en' => 'Theater, dance and performance art services',
                    'de' => 'Theater-, Tanz- und Performance-Kunst-Dienstleistungen',
                    'es' => 'Servicios de teatro, danza y arte performático',
                    'pl' => 'Usługi teatru, tańca i sztuki performatywnej'
                ])
            ],
            [
                'id' => 334,
                'parent_id' => 21,
                'slug' => 'art-education',
                'name' => 'Art Education',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Art Education',
                    'de' => 'Kunstausbildung',
                    'es' => 'Educación Artística',
                    'pl' => 'Edukacja Artystyczna'
                ]),
                'scom' => 'Art classes and creative education services',
                'scom_translations' => json_encode([
                    'en' => 'Art classes and creative education services',
                    'de' => 'Kunstkurse und kreative Bildungsdienstleistungen',
                    'es' => 'Servicios de clases de arte y educación creativa',
                    'pl' => 'Usługi zajęć artystycznych i edukacji kreatywnej'
                ])
            ],
            [
                'id' => 335,
                'parent_id' => 21,
                'slug' => 'creative-workshops',
                'name' => 'Creative Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Creative Workshops',
                    'de' => 'Kreative Workshops',
                    'es' => 'Talleres Creativos',
                    'pl' => 'Warsztaty Kreatywne'
                ]),
                'scom' => 'Hands-on creative workshops and skill-building sessions',
                'scom_translations' => json_encode([
                    'en' => 'Hands-on creative workshops and skill-building sessions',
                    'de' => 'Praktische kreative Workshops und Kompetenzaufbau-Sitzungen',
                    'es' => 'Talleres creativos prácticos y sesiones de desarrollo de habilidades',
                    'pl' => 'Praktyczne warsztaty kreatywne i sesje rozwijania umiejętności'
                ])
            ],
            [
                'id' => 336,
                'parent_id' => 21,
                'slug' => 'artisan-products',
                'name' => 'Artisan Products',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Artisan Products',
                    'de' => 'Handwerkerprodukte',
                    'es' => 'Productos Artesanales',
                    'pl' => 'Produkty Rzemieślnicze'
                ]),
                'scom' => 'Handcrafted and artisan product manufacturing',
                'scom_translations' => json_encode([
                    'en' => 'Handcrafted and artisan product manufacturing',
                    'de' => 'Handgefertigte und Handwerkerprodukt-Herstellung',
                    'es' => 'Fabricación de productos hechos a mano y artesanales',
                    'pl' => 'Produkcja wyrobów ręcznych i rzemieślniczych'
                ])
            ],
            [
                'id' => 337,
                'parent_id' => 21,
                'slug' => 'gallery-services',
                'name' => 'Gallery Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Gallery Services',
                    'de' => 'Galerie-Dienstleistungen',
                    'es' => 'Servicios de Galería',
                    'pl' => 'Usługi Galerii'
                ]),
                'scom' => 'Art gallery management and exhibition services',
                'scom_translations' => json_encode([
                    'en' => 'Art gallery management and exhibition services',
                    'de' => 'Kunstgalerie-Management und Ausstellungsdienstleistungen',
                    'es' => 'Servicios de gestión de galerías de arte y exposiciones',
                    'pl' => 'Usługi zarządzania galeriami sztuki i wystaw'
                ])
            ],
            [
                'id' => 338,
                'parent_id' => 21,
                'slug' => 'art-therapy',
                'name' => 'Art Therapy',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Art Therapy',
                    'de' => 'Kunsttherapie',
                    'es' => 'Terapia de Arte',
                    'pl' => 'Arteterapia'
                ]),
                'scom' => 'Therapeutic art and creative healing services',
                'scom_translations' => json_encode([
                    'en' => 'Therapeutic art and creative healing services',
                    'de' => 'Therapeutische Kunst- und kreative Heilungsdienstleistungen',
                    'es' => 'Servicios de arte terapéutico y sanación creativa',
                    'pl' => 'Usługi sztuki terapeutycznej i uzdrawiania kreatywnego'
                ])
            ],
            [
                'id' => 339,
                'parent_id' => 21,
                'slug' => 'cultural-services',
                'name' => 'Cultural Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cultural Services',
                    'de' => 'Kulturdienste',
                    'es' => 'Servicios Culturales',
                    'pl' => 'Usługi Kulturalne'
                ]),
                'scom' => 'Cultural preservation and community arts services',
                'scom_translations' => json_encode([
                    'en' => 'Cultural preservation and community arts services',
                    'de' => 'Kulturerhaltung und Gemeinschaftskunst-Dienstleistungen',
                    'es' => 'Servicios de preservación cultural y artes comunitarias',
                    'pl' => 'Usługi ochrony kultury i sztuki społecznej'
                ])
            ],
            [
                'id' => 340,
                'parent_id' => 21,
                'slug' => 'digital-arts',
                'name' => 'Digital Arts',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Arts',
                    'de' => 'Digitale Kunst',
                    'es' => 'Artes Digitales',
                    'pl' => 'Sztuka Cyfrowa'
                ]),
                'scom' => 'Digital art creation and multimedia services',
                'scom_translations' => json_encode([
                    'en' => 'Digital art creation and multimedia services',
                    'de' => 'Digitale Kunstschöpfung und Multimedia-Dienstleistungen',
                    'es' => 'Servicios de creación de arte digital y multimedia',
                    'pl' => 'Usługi tworzenia sztuki cyfrowej i multimediów'
                ])
            ],
            [
                'id' => 341,
                'parent_id' => 21,
                'slug' => 'pottery-ceramics',
                'name' => 'Pottery & Ceramics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pottery & Ceramics',
                    'de' => 'Töpferei und Keramik',
                    'es' => 'Alfarería y Cerámica',
                    'pl' => 'Garncarstwo i Ceramika'
                ]),
                'scom' => 'Pottery making and ceramic art services',
                'scom_translations' => json_encode([
                    'en' => 'Pottery making and ceramic art services',
                    'de' => 'Töpferei und Keramikkunst-Dienstleistungen',
                    'es' => 'Servicios de fabricación de alfarería y arte cerámico',
                    'pl' => 'Usługi garncarstwa i sztuki ceramicznej'
                ])
            ],
            [
                'id' => 342,
                'parent_id' => 21,
                'slug' => 'textile-arts',
                'name' => 'Textile Arts',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Textile Arts',
                    'de' => 'Textilkunst',
                    'es' => 'Artes Textiles',
                    'pl' => 'Sztuka Tekstylna'
                ]),
                'scom' => 'Fabric arts, quilting and textile creation services',
                'scom_translations' => json_encode([
                    'en' => 'Fabric arts, quilting and textile creation services',
                    'de' => 'Stoffkunst, Quilten und Textilschöpfungsdienstleistungen',
                    'es' => 'Servicios de artes de tela, acolchado y creación textil',
                    'pl' => 'Usługi sztuki tkaninowej, pikowania i tworzenia tekstyliów'
                ])
            ],
            [
                'id' => 343,
                'parent_id' => 21,
                'slug' => 'jewelry-making',
                'name' => 'Jewelry Making',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Jewelry Making',
                    'de' => 'Schmuckherstellung',
                    'es' => 'Fabricación de Joyas',
                    'pl' => 'Tworzenie Biżuterii'
                ]),
                'scom' => 'Custom jewelry design and metalwork services',
                'scom_translations' => json_encode([
                    'en' => 'Custom jewelry design and metalwork services',
                    'de' => 'Kundenspezifisches Schmuckdesign und Metallarbeits-Dienstleistungen',
                    'es' => 'Servicios de diseño de joyas personalizadas y trabajo en metal',
                    'pl' => 'Usługi projektowania niestandardowej biżuterii i obróbki metalu'
                ])
            ],
            [
                'id' => 344,
                'parent_id' => 21,
                'slug' => 'others-arts-crafts',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other arts and crafts services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other arts and crafts services not listed above',
                    'de' => 'Andere Kunst- und Handwerksdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de artes y manualidades no listados arriba',
                    'pl' => 'Inne usługi sztuki i rzemiosła niewymienione powyżej'
                ])
            ],
            [
                'id' => 345,
                'parent_id' => 22,
                'slug' => 'international-trading',
                'name' => 'International Trading',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Trading',
                    'de' => 'Internationaler Handel',
                    'es' => 'Comercio Internacional',
                    'pl' => 'Handel Międzynarodowy'
                ]),
                'scom' => 'Cross-border trade and international commerce services',
                'scom_translations' => json_encode([
                    'en' => 'Cross-border trade and international commerce services',
                    'de' => 'Grenzüberschreitender Handel und internationale Handelsdienstleistungen',
                    'es' => 'Servicios de comercio transfronterizo e internacional',
                    'pl' => 'Usługi handlu transgranicznego i międzynarodowego'
                ])
            ],
            [
                'id' => 346,
                'parent_id' => 22,
                'slug' => 'import-export-business',
                'name' => 'Import/Export Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Import/Export Business',
                    'de' => 'Import/Export-Geschäft',
                    'es' => 'Negocio de Importación/Exportación',
                    'pl' => 'Biznes Importowo-Eksportowy'
                ]),
                'scom' => 'Product import and export business operations',
                'scom_translations' => json_encode([
                    'en' => 'Product import and export business operations',
                    'de' => 'Produktimport- und Exportgeschäftstätigkeiten',
                    'es' => 'Operaciones comerciales de importación y exportación de productos',
                    'pl' => 'Operacje biznesowe importu i eksportu produktów'
                ])
            ],
            [
                'id' => 347,
                'parent_id' => 22,
                'slug' => 'wholesale-distribution',
                'name' => 'Wholesale Distribution',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wholesale Distribution',
                    'de' => 'Großhandelsvertrieb',
                    'es' => 'Distribución Mayorista',
                    'pl' => 'Dystrybucja Hurtowa'
                ]),
                'scom' => 'Bulk wholesale and distribution services',
                'scom_translations' => json_encode([
                    'en' => 'Bulk wholesale and distribution services',
                    'de' => 'Großhandels- und Vertriebsdienstleistungen',
                    'es' => 'Servicios de distribución y venta al por mayor',
                    'pl' => 'Usługi hurtowej dystrybucji i sprzedaży'
                ])
            ],
            [
                'id' => 348,
                'parent_id' => 22,
                'slug' => 'commodity-trading',
                'name' => 'Commodity Trading',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Commodity Trading',
                    'de' => 'Rohstoffhandel',
                    'es' => 'Comercio de Materias Primas',
                    'pl' => 'Handel Towarami'
                ]),
                'scom' => 'Raw materials and commodity trading services',
                'scom_translations' => json_encode([
                    'en' => 'Raw materials and commodity trading services',
                    'de' => 'Rohstoff- und Warenhandelsdienstleistungen',
                    'es' => 'Servicios de comercio de materias primas y productos básicos',
                    'pl' => 'Usługi handlu surowcami i towarami'
                ])
            ],
            [
                'id' => 349,
                'parent_id' => 22,
                'slug' => 'global-sourcing',
                'name' => 'Global Sourcing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Global Sourcing',
                    'de' => 'Globale Beschaffung',
                    'es' => 'Sourcing Global',
                    'pl' => 'Sourcing Globalny'
                ]),
                'scom' => 'International supplier sourcing and procurement services',
                'scom_translations' => json_encode([
                    'en' => 'International supplier sourcing and procurement services',
                    'de' => 'Internationale Lieferantensuche und Beschaffungsdienstleistungen',
                    'es' => 'Servicios de búsqueda de proveedores internacionales y adquisiciones',
                    'pl' => 'Usługi pozyskiwania dostawców międzynarodowych i zamówień'
                ])
            ],
            [
                'id' => 350,
                'parent_id' => 22,
                'slug' => 'trade-consulting',
                'name' => 'Trade Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trade Consulting',
                    'de' => 'Handelsberatung',
                    'es' => 'Consultoría Comercial',
                    'pl' => 'Doradztwo Handlowe'
                ]),
                'scom' => 'International trade strategy and consulting services',
                'scom_translations' => json_encode([
                    'en' => 'International trade strategy and consulting services',
                    'de' => 'Internationale Handelsstrategie und Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría y estrategia de comercio internacional',
                    'pl' => 'Usługi strategii handlu międzynarodowego i doradztwa'
                ])
            ],
            [
                'id' => 351,
                'parent_id' => 22,
                'slug' => 'customs-services',
                'name' => 'Customs Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customs Services',
                    'de' => 'Zolldienstleistungen',
                    'es' => 'Servicios Aduaneros',
                    'pl' => 'Usługi Celne'
                ]),
                'scom' => 'Customs clearance and compliance services',
                'scom_translations' => json_encode([
                    'en' => 'Customs clearance and compliance services',
                    'de' => 'Zollabfertigung und Compliance-Dienstleistungen',
                    'es' => 'Servicios de despacho aduanero y cumplimiento',
                    'pl' => 'Usługi odprawy celnej i zgodności'
                ])
            ],
            [
                'id' => 352,
                'parent_id' => 22,
                'slug' => 'international-logistics',
                'name' => 'International Logistics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Logistics',
                    'de' => 'Internationale Logistik',
                    'es' => 'Logística Internacional',
                    'pl' => 'Logistyka Międzynarodowa'
                ]),
                'scom' => 'Global shipping and logistics coordination services',
                'scom_translations' => json_encode([
                    'en' => 'Global shipping and logistics coordination services',
                    'de' => 'Globale Versand- und Logistik-Koordinationsdienstleistungen',
                    'es' => 'Servicios de coordinación de envío y logística global',
                    'pl' => 'Usługi koordynacji wysyłki i logistyki globalnej'
                ])
            ],
            [
                'id' => 353,
                'parent_id' => 22,
                'slug' => 'foreign-exchange',
                'name' => 'Foreign Exchange',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Foreign Exchange',
                    'de' => 'Devisenhandel',
                    'es' => 'Cambio de Divisas',
                    'pl' => 'Wymiana Walut'
                ]),
                'scom' => 'Currency exchange and foreign exchange services',
                'scom_translations' => json_encode([
                    'en' => 'Currency exchange and foreign exchange services',
                    'de' => 'Währungsumtausch und Devisendienstleistungen',
                    'es' => 'Servicios de cambio de moneda y divisas',
                    'pl' => 'Usługi wymiany walut i walut obcych'
                ])
            ],
            [
                'id' => 354,
                'parent_id' => 22,
                'slug' => 'trade-finance',
                'name' => 'Trade Finance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trade Finance',
                    'de' => 'Handelsfinanzierung',
                    'es' => 'Financiamiento Comercial',
                    'pl' => 'Finansowanie Handlu'
                ]),
                'scom' => 'International trade financing and credit services',
                'scom_translations' => json_encode([
                    'en' => 'International trade financing and credit services',
                    'de' => 'Internationale Handelsfinanzierung und Kreditdienstleistungen',
                    'es' => 'Servicios de financiamiento y crédito para comercio internacional',
                    'pl' => 'Usługi finansowania handlu międzynarodowego i kredytowe'
                ])
            ],
            [
                'id' => 355,
                'parent_id' => 22,
                'slug' => 'market-research',
                'name' => 'Market Research',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Market Research',
                    'de' => 'Marktforschung',
                    'es' => 'Investigación de Mercado',
                    'pl' => 'Badania Rynku'
                ]),
                'scom' => 'International market analysis and research services',
                'scom_translations' => json_encode([
                    'en' => 'International market analysis and research services',
                    'de' => 'Internationale Marktanalyse und Forschungsdienstleistungen',
                    'es' => 'Servicios de análisis e investigación de mercados internacionales',
                    'pl' => 'Usługi analizy i badań rynków międzynarodowych'
                ])
            ],
            [
                'id' => 356,
                'parent_id' => 22,
                'slug' => 'trade-documentation',
                'name' => 'Trade Documentation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trade Documentation',
                    'de' => 'Handelsdokumentation',
                    'es' => 'Documentación Comercial',
                    'pl' => 'Dokumentacja Handlowa'
                ]),
                'scom' => 'International trade documentation and compliance services',
                'scom_translations' => json_encode([
                    'en' => 'International trade documentation and compliance services',
                    'de' => 'Internationale Handelsdokumentation und Compliance-Dienstleistungen',
                    'es' => 'Servicios de documentación comercial internacional y cumplimiento',
                    'pl' => 'Usługi dokumentacji handlu międzynarodowego i zgodności'
                ])
            ],
            [
                'id' => 357,
                'parent_id' => 22,
                'slug' => 'export-management',
                'name' => 'Export Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Export Management',
                    'de' => 'Exportmanagement',
                    'es' => 'Gestión de Exportaciones',
                    'pl' => 'Zarządzanie Eksportem'
                ]),
                'scom' => 'Export operations management and coordination services',
                'scom_translations' => json_encode([
                    'en' => 'Export operations management and coordination services',
                    'de' => 'Exportbetriebsmanagement und Koordinationsdienstleistungen',
                    'es' => 'Servicios de gestión y coordinación de operaciones de exportación',
                    'pl' => 'Usługi zarządzania i koordynacji operacji eksportowych'
                ])
            ],
            [
                'id' => 358,
                'parent_id' => 22,
                'slug' => 'trading-platforms',
                'name' => 'Trading Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trading Platforms',
                    'de' => 'Handelsplattformen',
                    'es' => 'Plataformas de Comercio',
                    'pl' => 'Platformy Handlowe'
                ]),
                'scom' => 'Digital trading platforms and marketplace services',
                'scom_translations' => json_encode([
                    'en' => 'Digital trading platforms and marketplace services',
                    'de' => 'Digitale Handelsplattformen und Marktplatz-Dienstleistungen',
                    'es' => 'Servicios de plataformas de comercio digital y marketplace',
                    'pl' => 'Usługi platform handlu cyfrowego i marketplace'
                ])
            ],
            [
                'id' => 359,
                'parent_id' => 22,
                'slug' => 'others-trading-services',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other import/export and trading services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other import/export and trading services not listed above',
                    'de' => 'Andere Import/Export- und Handelsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de importación/exportación y comercio no listados arriba',
                    'pl' => 'Inne usługi importu/eksportu i handlu niewymienione powyżej'
                ])
            ],
            [
                'id' => 360,
                'parent_id' => 23,
                'slug' => 'franchise-ownership',
                'name' => 'Franchise Ownership',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise Ownership',
                    'de' => 'Franchise-Eigentum',
                    'es' => 'Propiedad de Franquicia',
                    'pl' => 'Własność Franczyzy'
                ]),
                'scom' => 'Franchise business ownership and operations',
                'scom_translations' => json_encode([
                    'en' => 'Franchise business ownership and operations',
                    'de' => 'Franchise-Geschäftseigentum und -betrieb',
                    'es' => 'Propiedad y operaciones de negocio de franquicia',
                    'pl' => 'Własność i działalność biznesu franczyzowego'
                ])
            ],
            [
                'id' => 361,
                'parent_id' => 23,
                'slug' => 'licensing-business',
                'name' => 'Licensing Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Licensing Business',
                    'de' => 'Lizenzgeschäft',
                    'es' => 'Negocio de Licencias',
                    'pl' => 'Biznes Licencjonowania'
                ]),
                'scom' => 'Intellectual property licensing and rights management',
                'scom_translations' => json_encode([
                    'en' => 'Intellectual property licensing and rights management',
                    'de' => 'Lizenzierung geistigen Eigentums und Rechteverwaltung',
                    'es' => 'Licenciamiento de propiedad intelectual y gestión de derechos',
                    'pl' => 'Licencjonowanie własności intelektualnej i zarządzanie prawami'
                ])
            ],
            [
                'id' => 362,
                'parent_id' => 23,
                'slug' => 'brand-licensing',
                'name' => 'Brand Licensing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Brand Licensing',
                    'de' => 'Markenlizenzierung',
                    'es' => 'Licenciamiento de Marca',
                    'pl' => 'Licencjonowanie Marki'
                ]),
                'scom' => 'Brand and trademark licensing services',
                'scom_translations' => json_encode([
                    'en' => 'Brand and trademark licensing services',
                    'de' => 'Marken- und Warenzeichen-Lizenzierungsdienstleistungen',
                    'es' => 'Servicios de licenciamiento de marca y marcas registradas',
                    'pl' => 'Usługi licencjonowania marek i znaków towarowych'
                ])
            ],
            [
                'id' => 363,
                'parent_id' => 23,
                'slug' => 'franchise-consulting',
                'name' => 'Franchise Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise Consulting',
                    'de' => 'Franchise-Beratung',
                    'es' => 'Consultoría de Franquicia',
                    'pl' => 'Doradztwo Franczyzowe'
                ]),
                'scom' => 'Franchise development and consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Franchise development and consulting services',
                    'de' => 'Franchise-Entwicklung und Beratungsdienstleistungen',
                    'es' => 'Servicios de desarrollo y consultoría de franquicia',
                    'pl' => 'Usługi rozwoju franczyzy i doradztwa'
                ])
            ],
            [
                'id' => 364,
                'parent_id' => 23,
                'slug' => 'territory-development',
                'name' => 'Territory Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Territory Development',
                    'de' => 'Gebietsentwicklung',
                    'es' => 'Desarrollo de Territorio',
                    'pl' => 'Rozwój Terytorium'
                ]),
                'scom' => 'Franchise territory expansion and development services',
                'scom_translations' => json_encode([
                    'en' => 'Franchise territory expansion and development services',
                    'de' => 'Franchise-Gebietsexpansion und Entwicklungsdienstleistungen',
                    'es' => 'Servicios de expansión y desarrollo de territorio de franquicia',
                    'pl' => 'Usługi ekspansji i rozwoju terytorium franczyzowego'
                ])
            ],
            [
                'id' => 365,
                'parent_id' => 23,
                'slug' => 'master-franchising',
                'name' => 'Master Franchising',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Master Franchising',
                    'de' => 'Master-Franchising',
                    'es' => 'Franquicia Maestra',
                    'pl' => 'Franczyza Główna'
                ]),
                'scom' => 'Master franchise rights and international expansion',
                'scom_translations' => json_encode([
                    'en' => 'Master franchise rights and international expansion',
                    'de' => 'Master-Franchise-Rechte und internationale Expansion',
                    'es' => 'Derechos de franquicia maestra y expansión internacional',
                    'pl' => 'Prawa franczyzy głównej i ekspansja międzynarodowa'
                ])
            ],
            [
                'id' => 366,
                'parent_id' => 23,
                'slug' => 'licensing-representation',
                'name' => 'Licensing Representation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Licensing Representation',
                    'de' => 'Lizenzvertretung',
                    'es' => 'Representación de Licencias',
                    'pl' => 'Reprezentacja Licencyjna'
                ]),
                'scom' => 'Licensing agent and representation services',
                'scom_translations' => json_encode([
                    'en' => 'Licensing agent and representation services',
                    'de' => 'Lizenzagent und Vertretungsdienstleistungen',
                    'es' => 'Servicios de agente de licencias y representación',
                    'pl' => 'Usługi agenta licencyjnego i reprezentacji'
                ])
            ],
            [
                'id' => 367,
                'parent_id' => 23,
                'slug' => 'franchise-sales',
                'name' => 'Franchise Sales',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise Sales',
                    'de' => 'Franchise-Verkauf',
                    'es' => 'Ventas de Franquicia',
                    'pl' => 'Sprzedaż Franczyzy'
                ]),
                'scom' => 'Franchise opportunity sales and brokerage services',
                'scom_translations' => json_encode([
                    'en' => 'Franchise opportunity sales and brokerage services',
                    'de' => 'Franchise-Gelegenheits-Verkauf und Maklerdienstleistungen',
                    'es' => 'Servicios de venta de oportunidades de franquicia y corretaje',
                    'pl' => 'Usługi sprzedaży możliwości franczyzowych i pośrednictwa'
                ])
            ],
            [
                'id' => 368,
                'parent_id' => 23,
                'slug' => 'system-development',
                'name' => 'System Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'System Development',
                    'de' => 'Systementwicklung',
                    'es' => 'Desarrollo de Sistema',
                    'pl' => 'Rozwój Systemu'
                ]),
                'scom' => 'Franchise system design and development services',
                'scom_translations' => json_encode([
                    'en' => 'Franchise system design and development services',
                    'de' => 'Franchise-Systemdesign und Entwicklungsdienstleistungen',
                    'es' => 'Servicios de diseño y desarrollo de sistema de franquicia',
                    'pl' => 'Usługi projektowania i rozwoju systemu franczyzowego'
                ])
            ],
            [
                'id' => 369,
                'parent_id' => 23,
                'slug' => 'multi-unit-operations',
                'name' => 'Multi-unit Operations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Multi-unit Operations',
                    'de' => 'Multi-Unit-Betrieb',
                    'es' => 'Operaciones Multi-unidad',
                    'pl' => 'Operacje Wielojednostkowe'
                ]),
                'scom' => 'Multiple franchise unit management and operations',
                'scom_translations' => json_encode([
                    'en' => 'Multiple franchise unit management and operations',
                    'de' => 'Management und Betrieb mehrerer Franchise-Einheiten',
                    'es' => 'Gestión y operaciones de múltiples unidades de franquicia',
                    'pl' => 'Zarządzanie i działalność wielu jednostek franczyzowych'
                ])
            ],
            [
                'id' => 370,
                'parent_id' => 23,
                'slug' => 'franchise-training',
                'name' => 'Franchise Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise Training',
                    'de' => 'Franchise-Schulung',
                    'es' => 'Capacitación de Franquicia',
                    'pl' => 'Szkolenia Franczyzowe'
                ]),
                'scom' => 'Franchisee training and support programs',
                'scom_translations' => json_encode([
                    'en' => 'Franchisee training and support programs',
                    'de' => 'Franchisenehmer-Schulung und Unterstützungsprogramme',
                    'es' => 'Programas de capacitación y apoyo para franquiciados',
                    'pl' => 'Programy szkoleniowe i wsparcia dla franczyzobiorców'
                ])
            ],
            [
                'id' => 371,
                'parent_id' => 23,
                'slug' => 'franchise-marketing',
                'name' => 'Franchise Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise Marketing',
                    'de' => 'Franchise-Marketing',
                    'es' => 'Marketing de Franquicia',
                    'pl' => 'Marketing Franczyzowy'
                ]),
                'scom' => 'Franchise brand marketing and promotional services',
                'scom_translations' => json_encode([
                    'en' => 'Franchise brand marketing and promotional services',
                    'de' => 'Franchise-Markenmarketing und Werbe-Dienstleistungen',
                    'es' => 'Servicios de marketing de marca de franquicia y promocionales',
                    'pl' => 'Usługi marketingu marki franczyzowej i promocyjne'
                ])
            ],
            [
                'id' => 372,
                'parent_id' => 23,
                'slug' => 'franchise-legal-services',
                'name' => 'Franchise Legal Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Franchise Legal Services',
                    'de' => 'Franchise-Rechtsdienstleistungen',
                    'es' => 'Servicios Legales de Franquicia',
                    'pl' => 'Usługi Prawne Franczyzowe'
                ]),
                'scom' => 'Franchise law and legal compliance services',
                'scom_translations' => json_encode([
                    'en' => 'Franchise law and legal compliance services',
                    'de' => 'Franchise-Recht und rechtliche Compliance-Dienstleistungen',
                    'es' => 'Servicios de derecho de franquicia y cumplimiento legal',
                    'pl' => 'Usługi prawa franczyzowego i zgodności prawnej'
                ])
            ],
            [
                'id' => 373,
                'parent_id' => 23,
                'slug' => 'technology-licensing',
                'name' => 'Technology Licensing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technology Licensing',
                    'de' => 'Technologie-Lizenzierung',
                    'es' => 'Licenciamiento de Tecnología',
                    'pl' => 'Licencjonowanie Technologii'
                ]),
                'scom' => 'Technology transfer and licensing services',
                'scom_translations' => json_encode([
                    'en' => 'Technology transfer and licensing services',
                    'de' => 'Technologietransfer und Lizenzierungsdienstleistungen',
                    'es' => 'Servicios de transferencia de tecnología y licenciamiento',
                    'pl' => 'Usługi transferu technologii i licencjonowania'
                ])
            ],
            [
                'id' => 374,
                'parent_id' => 23,
                'slug' => 'others-franchise-licensing',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other franchise and licensing services not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other franchise and licensing services not listed above',
                    'de' => 'Andere Franchise- und Lizenzierungsdienstleistungen, die oben nicht aufgeführt sind',
                    'es' => 'Otros servicios de franquicia y licenciamiento no listados arriba',
                    'pl' => 'Inne usługi franczyzowe i licencyjne niewymienione powyżej'
                ])
            ],
            [
                'id' => 375,
                'parent_id' => 24,
                'slug' => 'vending-machine-business',
                'name' => 'Vending Machine Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Vending Machine Business',
                    'de' => 'Verkaufsautomaten-Geschäft',
                    'es' => 'Negocio de Máquinas Expendedoras',
                    'pl' => 'Biznes Automatów Sprzedających'
                ]),
                'scom' => 'Vending machine operations and automated retail services',
                'scom_translations' => json_encode([
                    'en' => 'Vending machine operations and automated retail services',
                    'de' => 'Verkaufsautomaten-Betrieb und automatisierte Einzelhandelsdienstleistungen',
                    'es' => 'Operaciones de máquinas expendedoras y servicios de retail automatizado',
                    'pl' => 'Działalność automatów sprzedających i zautomatyzowanych usług detalicznych'
                ])
            ],
            [
                'id' => 376,
                'parent_id' => 24,
                'slug' => 'laundromat-dry-cleaning',
                'name' => 'Laundromat/Dry Cleaning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Laundromat/Dry Cleaning',
                    'de' => 'Waschsalon/Reinigung',
                    'es' => 'Lavandería/Tintorería',
                    'pl' => 'Pralnia/Czyszczenie Chemiczne'
                ]),
                'scom' => 'Self-service laundry and dry cleaning services',
                'scom_translations' => json_encode([
                    'en' => 'Self-service laundry and dry cleaning services',
                    'de' => 'Selbstbedienungs-Wäscherei und Reinigungsdienstleistungen',
                    'es' => 'Servicios de lavandería de autoservicio y tintorería',
                    'pl' => 'Usługi pralni samoobsługowej i czyszczenia chemicznego'
                ])
            ],
            [
                'id' => 377,
                'parent_id' => 24,
                'slug' => 'storage-facilities',
                'name' => 'Storage Facilities',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Storage Facilities',
                    'de' => 'Lagereinrichtungen',
                    'es' => 'Instalaciones de Almacenamiento',
                    'pl' => 'Obiekty Magazynowe'
                ]),
                'scom' => 'Self-storage and warehouse facility services',
                'scom_translations' => json_encode([
                    'en' => 'Self-storage and warehouse facility services',
                    'de' => 'Selbstlager- und Lagerhaus-Einrichtungsdienstleistungen',
                    'es' => 'Servicios de instalaciones de autoalmacenamiento y almacén',
                    'pl' => 'Usługi obiektów samoobsługowych magazynów i składów'
                ])
            ],
            [
                'id' => 378,
                'parent_id' => 24,
                'slug' => 'car-wash',
                'name' => 'Car Wash',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Car Wash',
                    'de' => 'Autowaschanlage',
                    'es' => 'Lavado de Autos',
                    'pl' => 'Myjnia Samochodowa'
                ]),
                'scom' => 'Automated and manual car washing services',
                'scom_translations' => json_encode([
                    'en' => 'Automated and manual car washing services',
                    'de' => 'Automatische und manuelle Autowaschdienstleistungen',
                    'es' => 'Servicios de lavado de autos automatizado y manual',
                    'pl' => 'Zautomatyzowane i ręczne usługi mycia samochodów'
                ])
            ],
            [
                'id' => 379,
                'parent_id' => 24,
                'slug' => 'gas-station',
                'name' => 'Gas Station',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Gas Station',
                    'de' => 'Tankstelle',
                    'es' => 'Gasolinera',
                    'pl' => 'Stacja Benzynowa'
                ]),
                'scom' => 'Fuel retail and automotive service station operations',
                'scom_translations' => json_encode([
                    'en' => 'Fuel retail and automotive service station operations',
                    'de' => 'Kraftstoff-Einzelhandel und Kfz-Service-Station-Betrieb',
                    'es' => 'Operaciones de retail de combustible y estación de servicio automotriz',
                    'pl' => 'Działalność sprzedaży detalicznej paliw i stacji obsługi samochodów'
                ])
            ],
            [
                'id' => 380,
                'parent_id' => 24,
                'slug' => 'convenience-store',
                'name' => 'Convenience Store',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Convenience Store',
                    'de' => 'Convenience-Store',
                    'es' => 'Tienda de Conveniencia',
                    'pl' => 'Sklep Osiedlowy'
                ]),
                'scom' => 'Small retail convenience store operations',
                'scom_translations' => json_encode([
                    'en' => 'Small retail convenience store operations',
                    'de' => 'Kleine Einzelhandels-Convenience-Store-Betriebe',
                    'es' => 'Operaciones de pequeñas tiendas de conveniencia retail',
                    'pl' => 'Działalność małych sklepów detalicznych osiedlowych'
                ])
            ],
            [
                'id' => 381,
                'parent_id' => 24,
                'slug' => 'service-station',
                'name' => 'Service Station',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Service Station',
                    'de' => 'Servicestation',
                    'es' => 'Estación de Servicio',
                    'pl' => 'Stacja Obsługi'
                ]),
                'scom' => 'Multi-service automotive and retail station operations',
                'scom_translations' => json_encode([
                    'en' => 'Multi-service automotive and retail station operations',
                    'de' => 'Multi-Service-Automobil- und Einzelhandels-Station-Betrieb',
                    'es' => 'Operaciones de estación multi-servicio automotriz y retail',
                    'pl' => 'Działalność wielousługowych stacji motoryzacyjnych i detalicznych'
                ])
            ],
            [
                'id' => 382,
                'parent_id' => 24,
                'slug' => 'equipment-leasing',
                'name' => 'Equipment Leasing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Equipment Leasing',
                    'de' => 'Ausrüstungsleasing',
                    'es' => 'Arrendamiento de Equipos',
                    'pl' => 'Leasing Sprzętu'
                ]),
                'scom' => 'Commercial and industrial equipment leasing services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial and industrial equipment leasing services',
                    'de' => 'Gewerbe- und Industrieausrüstungs-Leasingdienstleistungen',
                    'es' => 'Servicios de arrendamiento de equipos comerciales e industriales',
                    'pl' => 'Usługi leasingu sprzętu komercyjnego i przemysłowego'
                ])
            ],
            [
                'id' => 383,
                'parent_id' => 24,
                'slug' => 'business-equipment-sales',
                'name' => 'Business Equipment Sales',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Equipment Sales',
                    'de' => 'Geschäftsausrüstungs-Verkauf',
                    'es' => 'Ventas de Equipos Comerciales',
                    'pl' => 'Sprzedaż Sprzętu Biznesowego'
                ]),
                'scom' => 'Commercial equipment and machinery sales services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial equipment and machinery sales services',
                    'de' => 'Verkaufsdienstleistungen für Geschäftsausrüstung und Maschinen',
                    'es' => 'Servicios de venta de equipos comerciales y maquinaria',
                    'pl' => 'Usługi sprzedaży sprzętu komercyjnego i maszyn'
                ])
            ],
            [
                'id' => 384,
                'parent_id' => 24,
                'slug' => 'specialty-retail',
                'name' => 'Specialty Retail',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Specialty Retail',
                    'de' => 'Spezial-Einzelhandel',
                    'es' => 'Retail Especializado',
                    'pl' => 'Handel Detaliczny Specjalistyczny'
                ]),
                'scom' => 'Niche and specialty retail business operations',
                'scom_translations' => json_encode([
                    'en' => 'Niche and specialty retail business operations',
                    'de' => 'Nischen- und Spezial-Einzelhandelsgeschäftsbetrieb',
                    'es' => 'Operaciones de negocio retail de nicho y especializado',
                    'pl' => 'Działalność biznesowa handlu detalicznego niszowego i specjalistycznego'
                ])
            ],
            [
                'id' => 385,
                'parent_id' => 24,
                'slug' => 'mobile-business-services',
                'name' => 'Mobile Business Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mobile Business Services',
                    'de' => 'Mobile Geschäftsdienste',
                    'es' => 'Servicios Comerciales Móviles',
                    'pl' => 'Mobilne Usługi Biznesowe'
                ]),
                'scom' => 'Mobile and on-location business service operations',
                'scom_translations' => json_encode([
                    'en' => 'Mobile and on-location business service operations',
                    'de' => 'Mobile und vor-Ort-Geschäftsdienst-Betriebe',
                    'es' => 'Operaciones de servicios comerciales móviles y en ubicación',
                    'pl' => 'Działalność mobilnych usług biznesowych i na miejscu'
                ])
            ],
            [
                'id' => 386,
                'parent_id' => 24,
                'slug' => 'coin-operated-business',
                'name' => 'Coin-Operated Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Coin-Operated Business',
                    'de' => 'Münzbetriebenes Geschäft',
                    'es' => 'Negocio Operado con Monedas',
                    'pl' => 'Biznes na Monety'
                ]),
                'scom' => 'Coin-operated machines and automated service businesses',
                'scom_translations' => json_encode([
                    'en' => 'Coin-operated machines and automated service businesses',
                    'de' => 'Münzbetriebene Maschinen und automatisierte Service-Unternehmen',
                    'es' => 'Máquinas operadas con monedas y negocios de servicios automatizados',
                    'pl' => 'Maszyny na monety i zautomatyzowane firmy usługowe'
                ])
            ],
            [
                'id' => 387,
                'parent_id' => 24,
                'slug' => 'kiosk-business',
                'name' => 'Kiosk Business',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Kiosk Business',
                    'de' => 'Kiosk-Geschäft',
                    'es' => 'Negocio de Quiosco',
                    'pl' => 'Biznes Kiosku'
                ]),
                'scom' => 'Small retail kiosk and booth operations',
                'scom_translations' => json_encode([
                    'en' => 'Small retail kiosk and booth operations',
                    'de' => 'Kleine Einzelhandels-Kiosk- und Stand-Betriebe',
                    'es' => 'Operaciones de pequeños quioscos retail y stands',
                    'pl' => 'Działalność małych kiosków detalicznych i stoisk'
                ])
            ],
            [
                'id' => 388,
                'parent_id' => 24,
                'slug' => 'pop-up-retail',
                'name' => 'Pop-up Retail',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pop-up Retail',
                    'de' => 'Pop-up-Einzelhandel',
                    'es' => 'Retail Pop-up',
                    'pl' => 'Handel Detaliczny Pop-up'
                ]),
                'scom' => 'Temporary and pop-up retail store operations',
                'scom_translations' => json_encode([
                    'en' => 'Temporary and pop-up retail store operations',
                    'de' => 'Temporäre und Pop-up-Einzelhandelsgeschäft-Betriebe',
                    'es' => 'Operaciones de tiendas retail temporales y pop-up',
                    'pl' => 'Działalność tymczasowych sklepów detalicznych i pop-up'
                ])
            ],
            [
                'id' => 389,
                'parent_id' => 24,
                'slug' => 'others-business-ventures',
                'name' => 'Others',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Others',
                    'de' => 'Andere',
                    'es' => 'Otros',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other business ventures not listed above',
                'scom_translations' => json_encode([
                    'en' => 'Other business ventures not listed above',
                    'de' => 'Andere Geschäftsvorhaben, die oben nicht aufgeführt sind',
                    'es' => 'Otros negocios no listados arriba',
                    'pl' => 'Inne przedsiębiorstwa niewymienione powyżej'
                ])
            ]
        ];
        // Disable foreign key checks temporarily
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table
        DB::table('business_categories')->truncate();
        // Re-enable foreign key checks
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Insert categories
        foreach ($categories as $category) {
            DB::table('business_categories')->insert([
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
