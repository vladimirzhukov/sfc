<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategories extends Seeder
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
                'slug' => 'legal-compliance',
                'name' => 'Legal & Compliance Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Legal & Compliance Services',
                    'de' => 'Rechts- und Compliance-Dienstleistungen',
                    'es' => 'Servicios Legales y de Cumplimiento',
                    'pl' => 'Usługi Prawne i Zgodności'
                ]),
                'scom' => 'Legal Services and Compliance support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Legal Services and Compliance support for startups',
                    'de' => 'Rechtsdienstleistungen und Compliance-Unterstützung für Startups',
                    'es' => 'Servicios Legales y de Cumplimiento para startups',
                    'pl' => 'Usługi Prawne i Zgodności dla startupów'
                ])
            ],
            [
                'id' => 2,
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
                'scom' => 'Financial Services support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Financial Services support for startups',
                    'de' => 'Finanzdienstleistungen und Unterstützung für Startups',
                    'es' => 'Servicios Financieros y apoyo para startups',
                    'pl' => 'Usługi Finansowe i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'slug' => 'business-development',
                'name' => 'Business Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Development',
                    'de' => 'Geschäftsentwicklung',
                    'es' => 'Desarrollo de Negocios',
                    'pl' => 'Rozwój Biznesu'
                ]),
                'scom' => 'Business Development support and services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Business Development support and services for startups',
                    'de' => 'Unterstützung und Dienstleistungen für Geschäftsentwicklung von Startups',
                    'es' => 'Apoyo y servicios de Desarrollo de Negocios para startups',
                    'pl' => 'Wsparcie i usługi Rozwoju Biznesu dla startupów'
                ])
            ],
            [
                'id' => 4,
                'parent_id' => 0,
                'slug' => 'marketing-advertising',
                'name' => 'Marketing & Advertising',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing & Advertising',
                    'de' => 'Marketing und Werbung',
                    'es' => 'Marketing y Publicidad',
                    'pl' => 'Marketing i Reklama'
                ]),
                'scom' => 'Marketing & Advertising support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Marketing & Advertising support for startups',
                    'de' => 'Marketing- und Werbeunterstützung für Startups',
                    'es' => 'Apoyo de Marketing y Publicidad para startups',
                    'pl' => 'Wsparcie Marketingowe i Reklamowe dla startupów'
                ])
            ],
            [
                'id' => 5,
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
                'scom' => 'Technology Services support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Technology Services support for startups',
                    'de' => 'Technologiedienstleistungen und Unterstützung für Startups',
                    'es' => 'Servicios Tecnológicos y apoyo para startups',
                    'pl' => 'Usługi Technologiczne i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 6,
                'parent_id' => 0,
                'slug' => 'human-resources',
                'name' => 'Human Resources',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Human Resources',
                    'de' => 'Personalwesen',
                    'es' => 'Recursos Humanos',
                    'pl' => 'Zasoby Ludzkie'
                ]),
                'scom' => 'Human Resources support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Human Resources support for startups',
                    'de' => 'Personalwesen und Unterstützung für Startups',
                    'es' => 'Recursos Humanos y apoyo para startups',
                    'pl' => 'Zasoby Ludzkie i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 7,
                'parent_id' => 0,
                'slug' => 'sales-customer-success',
                'name' => 'Sales & Customer Success',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales & Customer Success',
                    'de' => 'Vertrieb und Kundenerfolg',
                    'es' => 'Ventas y Éxito del Cliente',
                    'pl' => 'Sprzedaż i Sukces Klienta'
                ]),
                'scom' => 'Sales & Customer Success support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Sales & Customer Success support for startups',
                    'de' => 'Vertriebs- und Kundenerfolgsunterstützung für Startups',
                    'es' => 'Apoyo de Ventas y Éxito del Cliente para startups',
                    'pl' => 'Wsparcie Sprzedaży i Sukcesu Klienta dla startupów'
                ])
            ],
            [
                'id' => 8,
                'parent_id' => 0,
                'slug' => 'operations-logistics',
                'name' => 'Operations & Logistics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Operations & Logistics',
                    'de' => 'Betrieb und Logistik',
                    'es' => 'Operaciones y Logística',
                    'pl' => 'Operacje i Logistyka'
                ]),
                'scom' => 'Operations & Logistics support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Operations & Logistics support for startups',
                    'de' => 'Betriebs- und Logistikunterstützung für Startups',
                    'es' => 'Apoyo de Operaciones y Logística para startups',
                    'pl' => 'Wsparcie Operacji i Logistyki dla startupów'
                ])
            ],
            [
                'id' => 9,
                'parent_id' => 0,
                'slug' => 'real-estate-facilities',
                'name' => 'Real Estate & Facilities',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Real Estate & Facilities',
                    'de' => 'Immobilien und Einrichtungen',
                    'es' => 'Bienes Raíces e Instalaciones',
                    'pl' => 'Nieruchomości i Obiekty'
                ]),
                'scom' => 'Real Estate & Facilities support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Real Estate & Facilities support for startups',
                    'de' => 'Immobilien- und Einrichtungsunterstützung für Startups',
                    'es' => 'Apoyo de Bienes Raíces e Instalaciones para startups',
                    'pl' => 'Wsparcie Nieruchomości i Obiektów dla startupów'
                ])
            ],
            [
                'id' => 10,
                'parent_id' => 0,
                'slug' => 'education-training',
                'name' => 'Education & Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Education & Training',
                    'de' => 'Bildung und Ausbildung',
                    'es' => 'Educación y Capacitación',
                    'pl' => 'Edukacja i Szkolenia'
                ]),
                'scom' => 'Education & Training support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Education & Training support for startups',
                    'de' => 'Bildungs- und Ausbildungsunterstützung für Startups',
                    'es' => 'Apoyo de Educación y Capacitación para startups',
                    'pl' => 'Wsparcie Edukacji i Szkoleń dla startupów'
                ])
            ],
            [
                'id' => 11,
                'parent_id' => 0,
                'slug' => 'creative-services',
                'name' => 'Creative Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Creative Services',
                    'de' => 'Kreativdienstleistungen',
                    'es' => 'Servicios Creativos',
                    'pl' => 'Usługi Kreatywne'
                ]),
                'scom' => 'Creative Services support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Creative Services support for startups',
                    'de' => 'Kreativdienstleistungen und Unterstützung für Startups',
                    'es' => 'Servicios Creativos y apoyo para startups',
                    'pl' => 'Usługi Kreatywne i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 12,
                'parent_id' => 0,
                'slug' => 'data-analytics',
                'name' => 'Data & Analytics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Data & Analytics',
                    'de' => 'Daten und Analytik',
                    'es' => 'Datos y Analítica',
                    'pl' => 'Dane i Analityka'
                ]),
                'scom' => 'Data & Analytics support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Data & Analytics support for startups',
                    'de' => 'Daten- und Analytikunterstützung für Startups',
                    'es' => 'Apoyo de Datos y Analítica para startups',
                    'pl' => 'Wsparcie Danych i Analityki dla startupów'
                ])
            ],
            [
                'id' => 13,
                'parent_id' => 0,
                'slug' => 'networking-events',
                'name' => 'Networking & Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Networking & Events',
                    'de' => 'Networking und Veranstaltungen',
                    'es' => 'Networking y Eventos',
                    'pl' => 'Networking i Wydarzenia'
                ]),
                'scom' => 'Networking & Events support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Networking & Events support for startups',
                    'de' => 'Networking- und Veranstaltungsunterstützung für Startups',
                    'es' => 'Apoyo de Networking y Eventos para startups',
                    'pl' => 'Wsparcie Networkingowe i Wydarzeń dla startupów'
                ])
            ],
            [
                'id' => 14,
                'parent_id' => 0,
                'slug' => 'international-services',
                'name' => 'International Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Services',
                    'de' => 'Internationale Dienstleistungen',
                    'es' => 'Servicios Internacionales',
                    'pl' => 'Usługi Międzynarodowe'
                ]),
                'scom' => 'International Services support for startups',
                'scom_translations' => json_encode([
                    'en' => 'International Services support for startups',
                    'de' => 'Internationale Dienstleistungen und Unterstützung für Startups',
                    'es' => 'Servicios Internacionales y apoyo para startups',
                    'pl' => 'Usługi Międzynarodowe i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 15,
                'parent_id' => 0,
                'slug' => 'specialized-industry-services',
                'name' => 'Specialized Industry Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Specialized Industry Services',
                    'de' => 'Spezialisierte Branchen-Dienstleistungen',
                    'es' => 'Servicios Especializados por Industria',
                    'pl' => 'Usługi Specjalistyczne według Branży'
                ]),
                'scom' => 'Specialized Industry Services support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Specialized Industry Services support for startups',
                    'de' => 'Spezialisierte Branchen-Dienstleistungen und Unterstützung für Startups',
                    'es' => 'Servicios Especializados por Industria y apoyo para startups',
                    'pl' => 'Usługi Specjalistyczne według Branży i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 16,
                'parent_id' => 0,
                'slug' => 'other-professional-services',
                'name' => 'Other Professional Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Professional Services',
                    'de' => 'Andere professionelle Dienstleistungen',
                    'es' => 'Otros Servicios Profesionales',
                    'pl' => 'Inne Usługi Profesjonalne'
                ]),
                'scom' => 'Other Professional Services support for startups',
                'scom_translations' => json_encode([
                    'en' => 'Other Professional Services support for startups',
                    'de' => 'Andere professionelle Dienstleistungen und Unterstützung für Startups',
                    'es' => 'Otros Servicios Profesionales y apoyo para startups',
                    'pl' => 'Inne Usługi Profesjonalne i wsparcie dla startupów'
                ])
            ],
            [
                'id' => 17,
                'parent_id' => 1,
                'slug' => 'startup-legal-services',
                'name' => 'Startup Legal Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Legal Services',
                    'de' => 'Startup-Rechtsdienstleistungen',
                    'es' => 'Servicios Legales para Startups',
                    'pl' => 'Usługi Prawne dla Startupów'
                ]),
                'scom' => 'General legal services specifically tailored for startup companies',
                'scom_translations' => json_encode([
                    'en' => 'General legal services specifically tailored for startup companies',
                    'de' => 'Allgemeine Rechtsdienstleistungen speziell für Startup-Unternehmen',
                    'es' => 'Servicios legales generales específicamente adaptados para empresas startup',
                    'pl' => 'Ogólne usługi prawne specjalnie dostosowane dla firm startupowych'
                ])
            ],
            [
                'id' => 18,
                'parent_id' => 1,
                'slug' => 'intellectual-property-law',
                'name' => 'Intellectual Property Law',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Intellectual Property Law',
                    'de' => 'Recht des geistigen Eigentums',
                    'es' => 'Derecho de Propiedad Intelectual',
                    'pl' => 'Prawo Własności Intelektualnej'
                ]),
                'scom' => 'Legal protection and management of intellectual property rights',
                'scom_translations' => json_encode([
                    'en' => 'Legal protection and management of intellectual property rights',
                    'de' => 'Rechtlicher Schutz und Verwaltung von geistigen Eigentumsrechten',
                    'es' => 'Protección legal y gestión de derechos de propiedad intelectual',
                    'pl' => 'Ochrona prawna i zarządzanie prawami własności intelektualnej'
                ])
            ],
            [
                'id' => 19,
                'parent_id' => 1,
                'slug' => 'corporate-law',
                'name' => 'Corporate Law',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Law',
                    'de' => 'Gesellschaftsrecht',
                    'es' => 'Derecho Corporativo',
                    'pl' => 'Prawo Spółek'
                ]),
                'scom' => 'Legal services related to corporate structure, governance and compliance',
                'scom_translations' => json_encode([
                    'en' => 'Legal services related to corporate structure, governance and compliance',
                    'de' => 'Rechtsdienstleistungen im Zusammenhang mit Unternehmensstruktur, Governance und Compliance',
                    'es' => 'Servicios legales relacionados con estructura corporativa, gobierno y cumplimiento',
                    'pl' => 'Usługi prawne związane ze strukturą korporacyjną, zarządzaniem i zgodnością'
                ])
            ],
            [
                'id' => 20,
                'parent_id' => 1,
                'slug' => 'contract-law',
                'name' => 'Contract Law',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Contract Law',
                    'de' => 'Vertragsrecht',
                    'es' => 'Derecho Contractual',
                    'pl' => 'Prawo Umów'
                ]),
                'scom' => 'Legal services for contract drafting, review and dispute resolution',
                'scom_translations' => json_encode([
                    'en' => 'Legal services for contract drafting, review and dispute resolution',
                    'de' => 'Rechtsdienstleistungen für Vertragserstellung, -prüfung und Streitbeilegung',
                    'es' => 'Servicios legales para redacción, revisión y resolución de disputas de contratos',
                    'pl' => 'Usługi prawne w zakresie sporządzania, przeglądu i rozwiązywania sporów umownych'
                ])
            ],
            [
                'id' => 21,
                'parent_id' => 1,
                'slug' => 'employment-law',
                'name' => 'Employment Law',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Employment Law',
                    'de' => 'Arbeitsrecht',
                    'es' => 'Derecho Laboral',
                    'pl' => 'Prawo Pracy'
                ]),
                'scom' => 'Legal services covering employment relationships, workplace rights and obligations',
                'scom_translations' => json_encode([
                    'en' => 'Legal services covering employment relationships, workplace rights and obligations',
                    'de' => 'Rechtsdienstleistungen zu Arbeitsverhältnissen, Arbeitsplatzrechten und -pflichten',
                    'es' => 'Servicios legales que cubren relaciones laborales, derechos y obligaciones del lugar de trabajo',
                    'pl' => 'Usługi prawne obejmujące stosunki pracy, prawa i obowiązki w miejscu pracy'
                ])
            ],
            [
                'id' => 22,
                'parent_id' => 1,
                'slug' => 'data-privacy-gdpr-compliance',
                'name' => 'Data Privacy & GDPR Compliance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Data Privacy & GDPR Compliance',
                    'de' => 'Datenschutz und DSGVO-Compliance',
                    'es' => 'Privacidad de Datos y Cumplimiento GDPR',
                    'pl' => 'Prywatność Danych i Zgodność z RODO'
                ]),
                'scom' => 'Legal guidance on data protection regulations and privacy compliance',
                'scom_translations' => json_encode([
                    'en' => 'Legal guidance on data protection regulations and privacy compliance',
                    'de' => 'Rechtliche Beratung zu Datenschutzbestimmungen und Datenschutz-Compliance',
                    'es' => 'Orientación legal sobre regulaciones de protección de datos y cumplimiento de privacidad',
                    'pl' => 'Poradnictwo prawne w zakresie przepisów o ochronie danych i zgodności z prywatnością'
                ])
            ],
            [
                'id' => 23,
                'parent_id' => 1,
                'slug' => 'securities-law',
                'name' => 'Securities Law',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Securities Law',
                    'de' => 'Wertpapierrecht',
                    'es' => 'Derecho de Valores',
                    'pl' => 'Prawo Papierów Wartościowych'
                ]),
                'scom' => 'Legal services for securities regulations, fundraising and investor relations',
                'scom_translations' => json_encode([
                    'en' => 'Legal services for securities regulations, fundraising and investor relations',
                    'de' => 'Rechtsdienstleistungen für Wertpapiervorschriften, Fundraising und Investor Relations',
                    'es' => 'Servicios legales para regulaciones de valores, recaudación de fondos y relaciones con inversores',
                    'pl' => 'Usługi prawne w zakresie regulacji papierów wartościowych, pozyskiwania funduszy i relacji z inwestorami'
                ])
            ],
            [
                'id' => 24,
                'parent_id' => 1,
                'slug' => 'international-law',
                'name' => 'International Law',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Law',
                    'de' => 'Internationales Recht',
                    'es' => 'Derecho Internacional',
                    'pl' => 'Prawo Międzynarodowe'
                ]),
                'scom' => 'Legal services for cross-border operations and international regulations',
                'scom_translations' => json_encode([
                    'en' => 'Legal services for cross-border operations and international regulations',
                    'de' => 'Rechtsdienstleistungen für grenzüberschreitende Geschäfte und internationale Vorschriften',
                    'es' => 'Servicios legales para operaciones transfronterizas y regulaciones internacionales',
                    'pl' => 'Usługi prawne dla działań transgranicznych i przepisów międzynarodowych'
                ])
            ],
            [
                'id' => 25,
                'parent_id' => 1,
                'slug' => 'patent-trademark-services',
                'name' => 'Patent & Trademark Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Patent & Trademark Services',
                    'de' => 'Patent- und Markendienstleistungen',
                    'es' => 'Servicios de Patentes y Marcas',
                    'pl' => 'Usługi Patentowe i Znaków Towarowych'
                ]),
                'scom' => 'Specialized services for patent applications and trademark registration',
                'scom_translations' => json_encode([
                    'en' => 'Specialized services for patent applications and trademark registration',
                    'de' => 'Spezialisierte Dienstleistungen für Patentanmeldungen und Markenregistrierung',
                    'es' => 'Servicios especializados para aplicaciones de patentes y registro de marcas',
                    'pl' => 'Usługi specjalistyczne w zakresie zgłoszeń patentowych i rejestracji znaków towarowych'
                ])
            ],
            [
                'id' => 26,
                'parent_id' => 1,
                'slug' => 'business-formation-incorporation',
                'name' => 'Business Formation & Incorporation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Formation & Incorporation',
                    'de' => 'Unternehmensgründung und Inkorporation',
                    'es' => 'Formación e Incorporación de Empresas',
                    'pl' => 'Tworzenie i Rejestracja Firm'
                ]),
                'scom' => 'Legal assistance with business entity formation and incorporation processes',
                'scom_translations' => json_encode([
                    'en' => 'Legal assistance with business entity formation and incorporation processes',
                    'de' => 'Rechtshilfe bei der Gründung von Geschäftseinheiten und Inkorporationsprozessen',
                    'es' => 'Asistencia legal con formación de entidades empresariales y procesos de incorporación',
                    'pl' => 'Pomoc prawna w tworzeniu podmiotów gospodarczych i procesach rejestracji'
                ])
            ],
            [
                'id' => 27,
                'parent_id' => 1,
                'slug' => 'other-legal-compliance',
                'name' => 'Other Legal & Compliance',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Legal & Compliance',
                    'de' => 'Andere Rechts- und Compliance-Dienstleistungen',
                    'es' => 'Otros Servicios Legales y de Cumplimiento',
                    'pl' => 'Inne Usługi Prawne i Zgodności'
                ]),
                'scom' => 'Other legal and compliance services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other legal and compliance services not covered in specific categories',
                    'de' => 'Andere Rechts- und Compliance-Dienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios legales y de cumplimiento no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi prawne i zgodności nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 28,
                'parent_id' => 2,
                'slug' => 'accounting-bookkeeping',
                'name' => 'Accounting & Bookkeeping',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Accounting & Bookkeeping',
                    'de' => 'Buchhaltung und Buchführung',
                    'es' => 'Contabilidad y Teneduría de Libros',
                    'pl' => 'Księgowość i Prowadzenie Ksiąg'
                ]),
                'scom' => 'Professional accounting and bookkeeping services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Professional accounting and bookkeeping services for startups',
                    'de' => 'Professionelle Buchhaltungs- und Buchführungsdienstleistungen für Startups',
                    'es' => 'Servicios profesionales de contabilidad y teneduría de libros para startups',
                    'pl' => 'Profesjonalne usługi księgowe i prowadzenia ksiąg dla startupów'
                ])
            ],
            [
                'id' => 29,
                'parent_id' => 2,
                'slug' => 'tax-preparation-planning',
                'name' => 'Tax Preparation & Planning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tax Preparation & Planning',
                    'de' => 'Steuervorbereitung und -planung',
                    'es' => 'Preparación y Planificación Fiscal',
                    'pl' => 'Przygotowanie i Planowanie Podatkowe'
                ]),
                'scom' => 'Tax preparation, planning and compliance services for businesses',
                'scom_translations' => json_encode([
                    'en' => 'Tax preparation, planning and compliance services for businesses',
                    'de' => 'Steuervorbereitung, -planung und Compliance-Dienstleistungen für Unternehmen',
                    'es' => 'Servicios de preparación, planificación y cumplimiento fiscal para empresas',
                    'pl' => 'Usługi przygotowania, planowania i zgodności podatkowej dla firm'
                ])
            ],
            [
                'id' => 30,
                'parent_id' => 2,
                'slug' => 'financial-planning-advisory',
                'name' => 'Financial Planning & Advisory',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Planning & Advisory',
                    'de' => 'Finanzplanung und Beratung',
                    'es' => 'Planificación y Asesoría Financiera',
                    'pl' => 'Planowanie i Doradztwo Finansowe'
                ]),
                'scom' => 'Strategic financial planning and advisory services for business growth',
                'scom_translations' => json_encode([
                    'en' => 'Strategic financial planning and advisory services for business growth',
                    'de' => 'Strategische Finanzplanung und Beratungsdienstleistungen für Unternehmenswachstum',
                    'es' => 'Planificación financiera estratégica y servicios de asesoría para el crecimiento empresarial',
                    'pl' => 'Strategiczne planowanie finansowe i usługi doradcze dla rozwoju biznesu'
                ])
            ],
            [
                'id' => 31,
                'parent_id' => 2,
                'slug' => 'venture-capital',
                'name' => 'Venture Capital',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Venture Capital',
                    'de' => 'Risikokapital',
                    'es' => 'Capital de Riesgo',
                    'pl' => 'Kapitał Wysokiego Ryzyka'
                ]),
                'scom' => 'Venture capital investment and funding services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Venture capital investment and funding services for startups',
                    'de' => 'Risikokapital-Investment und Finanzierungsdienstleistungen für Startups',
                    'es' => 'Servicios de inversión y financiamiento de capital de riesgo para startups',
                    'pl' => 'Usługi inwestycyjne i finansowe kapitału wysokiego ryzyka dla startupów'
                ])
            ],
            [
                'id' => 32,
                'parent_id' => 2,
                'slug' => 'angel-investors',
                'name' => 'Angel Investors',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Angel Investors',
                    'de' => 'Angel-Investoren',
                    'es' => 'Inversores Ángel',
                    'pl' => 'Inwestorzy Aniołowie'
                ]),
                'scom' => 'Angel investor networks and early-stage investment services',
                'scom_translations' => json_encode([
                    'en' => 'Angel investor networks and early-stage investment services',
                    'de' => 'Angel-Investor-Netzwerke und Frühphasen-Investitionsdienstleistungen',
                    'es' => 'Redes de inversores ángel y servicios de inversión en etapa temprana',
                    'pl' => 'Sieci inwestorów aniołów i usługi inwestycyjne wczesnego etapu'
                ])
            ],
            [
                'id' => 33,
                'parent_id' => 2,
                'slug' => 'crowdfunding-platforms',
                'name' => 'Crowdfunding Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Crowdfunding Platforms',
                    'de' => 'Crowdfunding-Plattformen',
                    'es' => 'Plataformas de Crowdfunding',
                    'pl' => 'Platformy Crowdfundingu'
                ]),
                'scom' => 'Crowdfunding platforms and campaign management services',
                'scom_translations' => json_encode([
                    'en' => 'Crowdfunding platforms and campaign management services',
                    'de' => 'Crowdfunding-Plattformen und Kampagnen-Management-Dienstleistungen',
                    'es' => 'Plataformas de crowdfunding y servicios de gestión de campañas',
                    'pl' => 'Platformy crowdfundingu i usługi zarządzania kampaniami'
                ])
            ],
            [
                'id' => 34,
                'parent_id' => 2,
                'slug' => 'business-banking',
                'name' => 'Business Banking',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Banking',
                    'de' => 'Geschäftsbanking',
                    'es' => 'Banca Empresarial',
                    'pl' => 'Bankowość Biznesowa'
                ]),
                'scom' => 'Business banking services and financial account management',
                'scom_translations' => json_encode([
                    'en' => 'Business banking services and financial account management',
                    'de' => 'Geschäftsbanking-Dienstleistungen und Finanzkonto-Verwaltung',
                    'es' => 'Servicios de banca empresarial y gestión de cuentas financieras',
                    'pl' => 'Usługi bankowości biznesowej i zarządzanie rachunkami finansowymi'
                ])
            ],
            [
                'id' => 35,
                'parent_id' => 2,
                'slug' => 'insurance-services',
                'name' => 'Insurance Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Insurance Services',
                    'de' => 'Versicherungsdienstleistungen',
                    'es' => 'Servicios de Seguros',
                    'pl' => 'Usługi Ubezpieczeniowe'
                ]),
                'scom' => 'Business insurance and risk management services',
                'scom_translations' => json_encode([
                    'en' => 'Business insurance and risk management services',
                    'de' => 'Unternehmensversicherung und Risikomanagement-Dienstleistungen',
                    'es' => 'Servicios de seguros empresariales y gestión de riesgos',
                    'pl' => 'Usługi ubezpieczeń biznesowych i zarządzania ryzykiem'
                ])
            ],
            [
                'id' => 36,
                'parent_id' => 2,
                'slug' => 'payroll-services',
                'name' => 'Payroll Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Payroll Services',
                    'de' => 'Lohnbuchhaltungsdienstleistungen',
                    'es' => 'Servicios de Nómina',
                    'pl' => 'Usługi Płacowe'
                ]),
                'scom' => 'Payroll processing and employee compensation management services',
                'scom_translations' => json_encode([
                    'en' => 'Payroll processing and employee compensation management services',
                    'de' => 'Lohnbuchhaltung und Verwaltung von Mitarbeitervergütung',
                    'es' => 'Servicios de procesamiento de nómina y gestión de compensación de empleados',
                    'pl' => 'Usługi przetwarzania wynagrodzeń i zarządzania kompensatami pracowników'
                ])
            ],
            [
                'id' => 37,
                'parent_id' => 2,
                'slug' => 'financial-auditing',
                'name' => 'Financial Auditing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Auditing',
                    'de' => 'Finanzprüfung',
                    'es' => 'Auditoría Financiera',
                    'pl' => 'Audyt Finansowy'
                ]),
                'scom' => 'Independent financial auditing and compliance verification services',
                'scom_translations' => json_encode([
                    'en' => 'Independent financial auditing and compliance verification services',
                    'de' => 'Unabhängige Finanzprüfung und Compliance-Verifizierungsdienstleistungen',
                    'es' => 'Servicios independientes de auditoría financiera y verificación de cumplimiento',
                    'pl' => 'Niezależne usługi audytu finansowego i weryfikacji zgodności'
                ])
            ],
            [
                'id' => 38,
                'parent_id' => 2,
                'slug' => 'other-financial-services',
                'name' => 'Other Financial Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Financial Services',
                    'de' => 'Andere Finanzdienstleistungen',
                    'es' => 'Otros Servicios Financieros',
                    'pl' => 'Inne Usługi Finansowe'
                ]),
                'scom' => 'Other financial services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other financial services not covered in specific categories',
                    'de' => 'Andere Finanzdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios financieros no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi finansowe nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 39,
                'parent_id' => 3,
                'slug' => 'business-strategy-consulting',
                'name' => 'Business Strategy Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Strategy Consulting',
                    'de' => 'Unternehmensstrategie-Beratung',
                    'es' => 'Consultoría de Estrategia Empresarial',
                    'pl' => 'Doradztwo w Strategii Biznesowej'
                ]),
                'scom' => 'Strategic business consulting and planning services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Strategic business consulting and planning services for startups',
                    'de' => 'Strategische Unternehmensberatung und Planungsdienstleistungen für Startups',
                    'es' => 'Servicios de consultoría estratégica empresarial y planificación para startups',
                    'pl' => 'Strategiczne doradztwo biznesowe i usługi planowania dla startupów'
                ])
            ],
            [
                'id' => 40,
                'parent_id' => 3,
                'slug' => 'market-research',
                'name' => 'Market Research',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Market Research',
                    'de' => 'Marktforschung',
                    'es' => 'Investigación de Mercado',
                    'pl' => 'Badania Rynku'
                ]),
                'scom' => 'Market research and analysis services for business decision making',
                'scom_translations' => json_encode([
                    'en' => 'Market research and analysis services for business decision making',
                    'de' => 'Marktforschungs- und Analysedienstleistungen für Geschäftsentscheidungen',
                    'es' => 'Servicios de investigación y análisis de mercado para la toma de decisiones empresariales',
                    'pl' => 'Usługi badań i analiz rynkowych dla podejmowania decyzji biznesowych'
                ])
            ],
            [
                'id' => 41,
                'parent_id' => 3,
                'slug' => 'business-plan-writing',
                'name' => 'Business Plan Writing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Plan Writing',
                    'de' => 'Businessplan-Erstellung',
                    'es' => 'Redacción de Planes de Negocio',
                    'pl' => 'Pisanie Planów Biznesowych'
                ]),
                'scom' => 'Professional business plan development and writing services',
                'scom_translations' => json_encode([
                    'en' => 'Professional business plan development and writing services',
                    'de' => 'Professionelle Businessplan-Entwicklung und Schreibdienstleistungen',
                    'es' => 'Servicios profesionales de desarrollo y redacción de planes de negocio',
                    'pl' => 'Profesjonalne usługi rozwoju i pisania planów biznesowych'
                ])
            ],
            [
                'id' => 42,
                'parent_id' => 3,
                'slug' => 'pitch-deck-creation',
                'name' => 'Pitch Deck Creation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pitch Deck Creation',
                    'de' => 'Pitch-Deck-Erstellung',
                    'es' => 'Creación de Pitch Deck',
                    'pl' => 'Tworzenie Prezentacji Pitch'
                ]),
                'scom' => 'Professional pitch deck design and presentation development services',
                'scom_translations' => json_encode([
                    'en' => 'Professional pitch deck design and presentation development services',
                    'de' => 'Professionelle Pitch-Deck-Design und Präsentationsentwicklungsdienstleistungen',
                    'es' => 'Servicios profesionales de diseño de pitch deck y desarrollo de presentaciones',
                    'pl' => 'Profesjonalne usługi projektowania pitch decków i rozwoju prezentacji'
                ])
            ],
            [
                'id' => 43,
                'parent_id' => 3,
                'slug' => 'go-to-market-strategy',
                'name' => 'Go-to-Market Strategy',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Go-to-Market Strategy',
                    'de' => 'Go-to-Market-Strategie',
                    'es' => 'Estrategia de Salida al Mercado',
                    'pl' => 'Strategia Wejścia na Rynek'
                ]),
                'scom' => 'Go-to-market strategy development and execution planning services',
                'scom_translations' => json_encode([
                    'en' => 'Go-to-market strategy development and execution planning services',
                    'de' => 'Go-to-Market-Strategieentwicklung und Ausführungsplanungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de estrategia de salida al mercado y planificación de ejecución',
                    'pl' => 'Usługi rozwoju strategii wejścia na rynek i planowania wykonania'
                ])
            ],
            [
                'id' => 44,
                'parent_id' => 3,
                'slug' => 'product-development-consulting',
                'name' => 'Product Development Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Development Consulting',
                    'de' => 'Produktentwicklungsberatung',
                    'es' => 'Consultoría de Desarrollo de Productos',
                    'pl' => 'Doradztwo w Rozwoju Produktów'
                ]),
                'scom' => 'Product development strategy and consulting services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Product development strategy and consulting services for startups',
                    'de' => 'Produktentwicklungsstrategie und Beratungsdienstleistungen für Startups',
                    'es' => 'Servicios de estrategia de desarrollo de productos y consultoría para startups',
                    'pl' => 'Usługi strategii rozwoju produktów i doradztwa dla startupów'
                ])
            ],
            [
                'id' => 45,
                'parent_id' => 3,
                'slug' => 'operations-consulting',
                'name' => 'Operations Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Operations Consulting',
                    'de' => 'Betriebsberatung',
                    'es' => 'Consultoría de Operaciones',
                    'pl' => 'Doradztwo Operacyjne'
                ]),
                'scom' => 'Business operations optimization and consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Business operations optimization and consulting services',
                    'de' => 'Geschäftsoperations-Optimierung und Beratungsdienstleistungen',
                    'es' => 'Servicios de optimización de operaciones empresariales y consultoría',
                    'pl' => 'Usługi optymalizacji operacji biznesowych i doradztwa'
                ])
            ],
            [
                'id' => 46,
                'parent_id' => 3,
                'slug' => 'management-consulting',
                'name' => 'Management Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Management Consulting',
                    'de' => 'Managementberatung',
                    'es' => 'Consultoría de Gestión',
                    'pl' => 'Doradztwo Zarządcze'
                ]),
                'scom' => 'Management consulting and organizational development services',
                'scom_translations' => json_encode([
                    'en' => 'Management consulting and organizational development services',
                    'de' => 'Managementberatung und Organisationsentwicklungsdienstleistungen',
                    'es' => 'Servicios de consultoría de gestión y desarrollo organizacional',
                    'pl' => 'Usługi doradztwa zarządczego i rozwoju organizacyjnego'
                ])
            ],
            [
                'id' => 47,
                'parent_id' => 3,
                'slug' => 'industry-analysis',
                'name' => 'Industry Analysis',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Analysis',
                    'de' => 'Branchenanalyse',
                    'es' => 'Análisis de Industria',
                    'pl' => 'Analiza Branży'
                ]),
                'scom' => 'Industry analysis and sector research services for business insights',
                'scom_translations' => json_encode([
                    'en' => 'Industry analysis and sector research services for business insights',
                    'de' => 'Branchenanalyse und Sektorforschungsdienstleistungen für Geschäftseinblicke',
                    'es' => 'Servicios de análisis de industria e investigación sectorial para insights empresariales',
                    'pl' => 'Usługi analizy branży i badań sektorowych dla wglądów biznesowych'
                ])
            ],
            [
                'id' => 48,
                'parent_id' => 3,
                'slug' => 'competitive-intelligence',
                'name' => 'Competitive Intelligence',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Competitive Intelligence',
                    'de' => 'Competitive Intelligence',
                    'es' => 'Inteligencia Competitiva',
                    'pl' => 'Wywiad Konkurencyjny'
                ]),
                'scom' => 'Competitive intelligence and market positioning analysis services',
                'scom_translations' => json_encode([
                    'en' => 'Competitive intelligence and market positioning analysis services',
                    'de' => 'Competitive Intelligence und Marktpositionierungsanalyse-Dienstleistungen',
                    'es' => 'Servicios de inteligencia competitiva y análisis de posicionamiento de mercado',
                    'pl' => 'Usługi wywiadu konkurencyjnego i analizy pozycjonowania rynkowego'
                ])
            ],
            [
                'id' => 49,
                'parent_id' => 3,
                'slug' => 'other-business-development',
                'name' => 'Other Business Development',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Business Development',
                    'de' => 'Andere Geschäftsentwicklung',
                    'es' => 'Otros Servicios de Desarrollo de Negocios',
                    'pl' => 'Inne Usługi Rozwoju Biznesu'
                ]),
                'scom' => 'Other business development services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other business development services not covered in specific categories',
                    'de' => 'Andere Geschäftsentwicklungsdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de desarrollo de negocios no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi rozwoju biznesu nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 50,
                'parent_id' => 4,
                'slug' => 'digital-marketing-agencies',
                'name' => 'Digital Marketing Agencies',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Marketing Agencies',
                    'de' => 'Digital Marketing Agenturen',
                    'es' => 'Agencias de Marketing Digital',
                    'pl' => 'Agencje Marketingu Cyfrowego'
                ]),
                'scom' => 'Full-service digital marketing agencies and comprehensive online marketing solutions',
                'scom_translations' => json_encode([
                    'en' => 'Full-service digital marketing agencies and comprehensive online marketing solutions',
                    'de' => 'Full-Service Digital Marketing Agenturen und umfassende Online-Marketing-Lösungen',
                    'es' => 'Agencias de marketing digital de servicio completo y soluciones integrales de marketing online',
                    'pl' => 'Agencje marketingu cyfrowego pełnego zakresu i kompleksowe rozwiązania marketingu online'
                ])
            ],
            [
                'id' => 51,
                'parent_id' => 4,
                'slug' => 'content-marketing',
                'name' => 'Content Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Marketing',
                    'de' => 'Content Marketing',
                    'es' => 'Marketing de Contenidos',
                    'pl' => 'Marketing Treści'
                ]),
                'scom' => 'Content marketing strategy, creation and distribution services',
                'scom_translations' => json_encode([
                    'en' => 'Content marketing strategy, creation and distribution services',
                    'de' => 'Content Marketing Strategie, Erstellung und Vertriebsdienstleistungen',
                    'es' => 'Servicios de estrategia, creación y distribución de marketing de contenidos',
                    'pl' => 'Usługi strategii marketingu treści, tworzenia i dystrybucji'
                ])
            ],
            [
                'id' => 52,
                'parent_id' => 4,
                'slug' => 'social-media-marketing',
                'name' => 'Social Media Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Media Marketing',
                    'de' => 'Social Media Marketing',
                    'es' => 'Marketing en Redes Sociales',
                    'pl' => 'Marketing w Mediach Społecznościowych'
                ]),
                'scom' => 'Social media marketing and community management services',
                'scom_translations' => json_encode([
                    'en' => 'Social media marketing and community management services',
                    'de' => 'Social Media Marketing und Community Management Dienstleistungen',
                    'es' => 'Servicios de marketing en redes sociales y gestión de comunidades',
                    'pl' => 'Usługi marketingu w mediach społecznościowych i zarządzania społecznościami'
                ])
            ],
            [
                'id' => 53,
                'parent_id' => 4,
                'slug' => 'seo-sem-services',
                'name' => 'SEO & SEM Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'SEO & SEM Services',
                    'de' => 'SEO & SEM Dienstleistungen',
                    'es' => 'Servicios de SEO y SEM',
                    'pl' => 'Usługi SEO i SEM'
                ]),
                'scom' => 'Search engine optimization and search engine marketing services',
                'scom_translations' => json_encode([
                    'en' => 'Search engine optimization and search engine marketing services',
                    'de' => 'Suchmaschinenoptimierung und Suchmaschinenmarketing-Dienstleistungen',
                    'es' => 'Servicios de optimización de motores de búsqueda y marketing en motores de búsqueda',
                    'pl' => 'Usługi optymalizacji wyszukiwarek i marketingu w wyszukiwarkach'
                ])
            ],
            [
                'id' => 54,
                'parent_id' => 4,
                'slug' => 'brand-strategy-design',
                'name' => 'Brand Strategy & Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Brand Strategy & Design',
                    'de' => 'Markenstrategie und Design',
                    'es' => 'Estrategia de Marca y Diseño',
                    'pl' => 'Strategia Marki i Design'
                ]),
                'scom' => 'Brand strategy development and visual identity design services',
                'scom_translations' => json_encode([
                    'en' => 'Brand strategy development and visual identity design services',
                    'de' => 'Markenstrategieentwicklung und visuelle Identitätsdesign-Dienstleistungen',
                    'es' => 'Servicios de desarrollo de estrategia de marca y diseño de identidad visual',
                    'pl' => 'Usługi rozwoju strategii marki i projektowania tożsamości wizualnej'
                ])
            ],
            [
                'id' => 55,
                'parent_id' => 4,
                'slug' => 'public-relations',
                'name' => 'Public Relations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Public Relations',
                    'de' => 'Public Relations',
                    'es' => 'Relaciones Públicas',
                    'pl' => 'Public Relations'
                ]),
                'scom' => 'Public relations and media communications services',
                'scom_translations' => json_encode([
                    'en' => 'Public relations and media communications services',
                    'de' => 'Public Relations und Medienkommunikationsdienstleistungen',
                    'es' => 'Servicios de relaciones públicas y comunicaciones mediáticas',
                    'pl' => 'Usługi public relations i komunikacji medialnej'
                ])
            ],
            [
                'id' => 56,
                'parent_id' => 4,
                'slug' => 'influencer-marketing',
                'name' => 'Influencer Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Influencer Marketing',
                    'de' => 'Influencer Marketing',
                    'es' => 'Marketing de Influencers',
                    'pl' => 'Marketing Influencerów'
                ]),
                'scom' => 'Influencer marketing and partnership management services',
                'scom_translations' => json_encode([
                    'en' => 'Influencer marketing and partnership management services',
                    'de' => 'Influencer Marketing und Partnerschaftsmanagement-Dienstleistungen',
                    'es' => 'Servicios de marketing de influencers y gestión de asociaciones',
                    'pl' => 'Usługi marketingu influencerów i zarządzania partnerstwami'
                ])
            ],
            [
                'id' => 57,
                'parent_id' => 4,
                'slug' => 'email-marketing',
                'name' => 'Email Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Email Marketing',
                    'de' => 'E-Mail-Marketing',
                    'es' => 'Email Marketing',
                    'pl' => 'Email Marketing'
                ]),
                'scom' => 'Email marketing campaigns and automation services',
                'scom_translations' => json_encode([
                    'en' => 'Email marketing campaigns and automation services',
                    'de' => 'E-Mail-Marketing-Kampagnen und Automatisierungsdienstleistungen',
                    'es' => 'Servicios de campañas de email marketing y automatización',
                    'pl' => 'Usługi kampanii email marketingu i automatyzacji'
                ])
            ],
            [
                'id' => 58,
                'parent_id' => 4,
                'slug' => 'video-production',
                'name' => 'Video Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Video Production',
                    'de' => 'Videoproduktion',
                    'es' => 'Producción de Video',
                    'pl' => 'Produkcja Wideo'
                ]),
                'scom' => 'Video production and multimedia content creation services',
                'scom_translations' => json_encode([
                    'en' => 'Video production and multimedia content creation services',
                    'de' => 'Videoproduktion und Multimedia-Content-Erstellungsdienstleistungen',
                    'es' => 'Servicios de producción de video y creación de contenido multimedia',
                    'pl' => 'Usługi produkcji wideo i tworzenia treści multimedialnych'
                ])
            ],
            [
                'id' => 59,
                'parent_id' => 4,
                'slug' => 'graphic-design-services',
                'name' => 'Graphic Design Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Graphic Design Services',
                    'de' => 'Grafikdesign-Dienstleistungen',
                    'es' => 'Servicios de Diseño Gráfico',
                    'pl' => 'Usługi Projektowania Graficznego'
                ]),
                'scom' => 'Graphic design and visual communication services',
                'scom_translations' => json_encode([
                    'en' => 'Graphic design and visual communication services',
                    'de' => 'Grafikdesign und visuelle Kommunikationsdienstleistungen',
                    'es' => 'Servicios de diseño gráfico y comunicación visual',
                    'pl' => 'Usługi projektowania graficznego i komunikacji wizualnej'
                ])
            ],
            [
                'id' => 60,
                'parent_id' => 4,
                'slug' => 'other-marketing-advertising',
                'name' => 'Other Marketing & Advertising',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Marketing & Advertising',
                    'de' => 'Andere Marketing- und Werbedienstleistungen',
                    'es' => 'Otros Servicios de Marketing y Publicidad',
                    'pl' => 'Inne Usługi Marketingu i Reklamy'
                ]),
                'scom' => 'Other marketing and advertising services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other marketing and advertising services not covered in specific categories',
                    'de' => 'Andere Marketing- und Werbedienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de marketing y publicidad no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi marketingu i reklamy nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 61,
                'parent_id' => 5,
                'slug' => 'software-development',
                'name' => 'Software Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Software Development',
                    'de' => 'Softwareentwicklung',
                    'es' => 'Desarrollo de Software',
                    'pl' => 'Rozwój Oprogramowania'
                ]),
                'scom' => 'Custom software development and programming services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Custom software development and programming services for startups',
                    'de' => 'Kundenspezifische Softwareentwicklung und Programmierdienstleistungen für Startups',
                    'es' => 'Servicios de desarrollo de software personalizado y programación para startups',
                    'pl' => 'Usługi niestandardowego rozwoju oprogramowania i programowania dla startupów'
                ])
            ],
            [
                'id' => 62,
                'parent_id' => 5,
                'slug' => 'web-development',
                'name' => 'Web Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Web Development',
                    'de' => 'Webentwicklung',
                    'es' => 'Desarrollo Web',
                    'pl' => 'Rozwój Stron Internetowych'
                ]),
                'scom' => 'Website and web application development services',
                'scom_translations' => json_encode([
                    'en' => 'Website and web application development services',
                    'de' => 'Website- und Webanwendungsentwicklungsdienstleistungen',
                    'es' => 'Servicios de desarrollo de sitios web y aplicaciones web',
                    'pl' => 'Usługi rozwoju stron internetowych i aplikacji webowych'
                ])
            ],
            [
                'id' => 63,
                'parent_id' => 5,
                'slug' => 'mobile-app-development',
                'name' => 'Mobile App Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mobile App Development',
                    'de' => 'Mobile App-Entwicklung',
                    'es' => 'Desarrollo de Aplicaciones Móviles',
                    'pl' => 'Rozwój Aplikacji Mobilnych'
                ]),
                'scom' => 'Mobile application development for iOS and Android platforms',
                'scom_translations' => json_encode([
                    'en' => 'Mobile application development for iOS and Android platforms',
                    'de' => 'Mobile Anwendungsentwicklung für iOS- und Android-Plattformen',
                    'es' => 'Desarrollo de aplicaciones móviles para plataformas iOS y Android',
                    'pl' => 'Rozwój aplikacji mobilnych dla platform iOS i Android'
                ])
            ],
            [
                'id' => 64,
                'parent_id' => 5,
                'slug' => 'ui-ux-design',
                'name' => 'UI/UX Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'UI/UX Design',
                    'de' => 'UI/UX Design',
                    'es' => 'Diseño UI/UX',
                    'pl' => 'Projektowanie UI/UX'
                ]),
                'scom' => 'User interface and user experience design services',
                'scom_translations' => json_encode([
                    'en' => 'User interface and user experience design services',
                    'de' => 'Benutzeroberflächen- und Benutzererfahrungsdesign-Dienstleistungen',
                    'es' => 'Servicios de diseño de interfaz de usuario y experiencia del usuario',
                    'pl' => 'Usługi projektowania interfejsu użytkownika i doświadczenia użytkownika'
                ])
            ],
            [
                'id' => 65,
                'parent_id' => 5,
                'slug' => 'cloud-services-hosting',
                'name' => 'Cloud Services & Hosting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cloud Services & Hosting',
                    'de' => 'Cloud-Dienste und Hosting',
                    'es' => 'Servicios en la Nube y Hosting',
                    'pl' => 'Usługi Chmurowe i Hosting'
                ]),
                'scom' => 'Cloud computing services and web hosting solutions',
                'scom_translations' => json_encode([
                    'en' => 'Cloud computing services and web hosting solutions',
                    'de' => 'Cloud-Computing-Dienste und Webhosting-Lösungen',
                    'es' => 'Servicios de computación en la nube y soluciones de hosting web',
                    'pl' => 'Usługi przetwarzania w chmurze i rozwiązania hostingu internetowego'
                ])
            ],
            [
                'id' => 66,
                'parent_id' => 5,
                'slug' => 'cybersecurity-services',
                'name' => 'Cybersecurity Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cybersecurity Services',
                    'de' => 'Cybersicherheits-Dienstleistungen',
                    'es' => 'Servicios de Ciberseguridad',
                    'pl' => 'Usługi Cyberbezpieczeństwa'
                ]),
                'scom' => 'Cybersecurity and information security services for businesses',
                'scom_translations' => json_encode([
                    'en' => 'Cybersecurity and information security services for businesses',
                    'de' => 'Cybersicherheits- und Informationssicherheitsdienstleistungen für Unternehmen',
                    'es' => 'Servicios de ciberseguridad y seguridad de la información para empresas',
                    'pl' => 'Usługi cyberbezpieczeństwa i bezpieczeństwa informacji dla firm'
                ])
            ],
            [
                'id' => 67,
                'parent_id' => 5,
                'slug' => 'it-support-consulting',
                'name' => 'IT Support & Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'IT Support & Consulting',
                    'de' => 'IT-Support und Beratung',
                    'es' => 'Soporte y Consultoría IT',
                    'pl' => 'Wsparcie i Doradztwo IT'
                ]),
                'scom' => 'IT support, consulting and technical assistance services',
                'scom_translations' => json_encode([
                    'en' => 'IT support, consulting and technical assistance services',
                    'de' => 'IT-Support, Beratung und technische Unterstützungsdienstleistungen',
                    'es' => 'Servicios de soporte IT, consultoría y asistencia técnica',
                    'pl' => 'Usługi wsparcia IT, doradztwa i pomocy technicznej'
                ])
            ],
            [
                'id' => 68,
                'parent_id' => 5,
                'slug' => 'database-management',
                'name' => 'Database Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Database Management',
                    'de' => 'Datenbankmanagement',
                    'es' => 'Gestión de Bases de Datos',
                    'pl' => 'Zarządzanie Bazami Danych'
                ]),
                'scom' => 'Database design, management and optimization services',
                'scom_translations' => json_encode([
                    'en' => 'Database design, management and optimization services',
                    'de' => 'Datenbankdesign, -management und -optimierungsdienstleistungen',
                    'es' => 'Servicios de diseño, gestión y optimización de bases de datos',
                    'pl' => 'Usługi projektowania, zarządzania i optymalizacji baz danych'
                ])
            ],
            [
                'id' => 69,
                'parent_id' => 5,
                'slug' => 'api-development',
                'name' => 'API Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'API Development',
                    'de' => 'API-Entwicklung',
                    'es' => 'Desarrollo de API',
                    'pl' => 'Rozwój API'
                ]),
                'scom' => 'API development and integration services for applications',
                'scom_translations' => json_encode([
                    'en' => 'API development and integration services for applications',
                    'de' => 'API-Entwicklung und Integrationsdienstleistungen für Anwendungen',
                    'es' => 'Servicios de desarrollo e integración de API para aplicaciones',
                    'pl' => 'Usługi rozwoju i integracji API dla aplikacji'
                ])
            ],
            [
                'id' => 70,
                'parent_id' => 5,
                'slug' => 'quality-assurance-testing',
                'name' => 'Quality Assurance & Testing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Quality Assurance & Testing',
                    'de' => 'Qualitätssicherung und Testing',
                    'es' => 'Aseguramiento de Calidad y Pruebas',
                    'pl' => 'Zapewnienie Jakości i Testowanie'
                ]),
                'scom' => 'Software quality assurance and testing services',
                'scom_translations' => json_encode([
                    'en' => 'Software quality assurance and testing services',
                    'de' => 'Software-Qualitätssicherung und Testdienstleistungen',
                    'es' => 'Servicios de aseguramiento de calidad y pruebas de software',
                    'pl' => 'Usługi zapewnienia jakości oprogramowania i testowania'
                ])
            ],
            [
                'id' => 71,
                'parent_id' => 5,
                'slug' => 'other-technology-services',
                'name' => 'Other Technology Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Technology Services',
                    'de' => 'Andere Technologiedienstleistungen',
                    'es' => 'Otros Servicios Tecnológicos',
                    'pl' => 'Inne Usługi Technologiczne'
                ]),
                'scom' => 'Other technology services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other technology services not covered in specific categories',
                    'de' => 'Andere Technologiedienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios tecnológicos no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi technologiczne nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 72,
                'parent_id' => 6,
                'slug' => 'recruitment-talent-acquisition',
                'name' => 'Recruitment & Talent Acquisition',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Recruitment & Talent Acquisition',
                    'de' => 'Rekrutierung und Talentakquise',
                    'es' => 'Reclutamiento y Adquisición de Talento',
                    'pl' => 'Rekrutacja i Pozyskiwanie Talentów'
                ]),
                'scom' => 'Professional recruitment and talent acquisition services for startups',
                'scom_translations' => json_encode([
                    'en' => 'Professional recruitment and talent acquisition services for startups',
                    'de' => 'Professionelle Rekrutierungs- und Talentakquise-Dienstleistungen für Startups',
                    'es' => 'Servicios profesionales de reclutamiento y adquisición de talento para startups',
                    'pl' => 'Profesjonalne usługi rekrutacji i pozyskiwania talentów dla startupów'
                ])
            ],
            [
                'id' => 73,
                'parent_id' => 6,
                'slug' => 'hr-consulting',
                'name' => 'HR Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'HR Consulting',
                    'de' => 'HR-Beratung',
                    'es' => 'Consultoría de RRHH',
                    'pl' => 'Doradztwo HR'
                ]),
                'scom' => 'Human resources consulting and strategic HR planning services',
                'scom_translations' => json_encode([
                    'en' => 'Human resources consulting and strategic HR planning services',
                    'de' => 'Personalberatung und strategische HR-Planungsdienstleistungen',
                    'es' => 'Servicios de consultoría de recursos humanos y planificación estratégica de RRHH',
                    'pl' => 'Usługi doradztwa w zakresie zasobów ludzkich i strategicznego planowania HR'
                ])
            ],
            [
                'id' => 74,
                'parent_id' => 6,
                'slug' => 'employee-benefits-administration',
                'name' => 'Employee Benefits Administration',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Employee Benefits Administration',
                    'de' => 'Mitarbeiterleistungs-Verwaltung',
                    'es' => 'Administración de Beneficios de Empleados',
                    'pl' => 'Administracja Świadczeń Pracowniczych'
                ]),
                'scom' => 'Employee benefits management and administration services',
                'scom_translations' => json_encode([
                    'en' => 'Employee benefits management and administration services',
                    'de' => 'Verwaltung und Administrierung von Mitarbeiterleistungen',
                    'es' => 'Servicios de gestión y administración de beneficios para empleados',
                    'pl' => 'Usługi zarządzania i administracji świadczeń pracowniczych'
                ])
            ],
            [
                'id' => 75,
                'parent_id' => 6,
                'slug' => 'training-development',
                'name' => 'Training & Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Training & Development',
                    'de' => 'Schulung und Entwicklung',
                    'es' => 'Capacitación y Desarrollo',
                    'pl' => 'Szkolenia i Rozwój'
                ]),
                'scom' => 'Employee training and professional development services',
                'scom_translations' => json_encode([
                    'en' => 'Employee training and professional development services',
                    'de' => 'Mitarbeiterschulung und berufliche Entwicklungsdienstleistungen',
                    'es' => 'Servicios de capacitación de empleados y desarrollo profesional',
                    'pl' => 'Usługi szkolenia pracowników i rozwoju zawodowego'
                ])
            ],
            [
                'id' => 76,
                'parent_id' => 6,
                'slug' => 'performance-management',
                'name' => 'Performance Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Performance Management',
                    'de' => 'Leistungsmanagement',
                    'es' => 'Gestión del Rendimiento',
                    'pl' => 'Zarządzanie Wynikami'
                ]),
                'scom' => 'Employee performance management and evaluation services',
                'scom_translations' => json_encode([
                    'en' => 'Employee performance management and evaluation services',
                    'de' => 'Mitarbeiterleistungsmanagement und Bewertungsdienstleistungen',
                    'es' => 'Servicios de gestión del rendimiento y evaluación de empleados',
                    'pl' => 'Usługi zarządzania wydajnością i oceny pracowników'
                ])
            ],
            [
                'id' => 77,
                'parent_id' => 6,
                'slug' => 'compensation-planning',
                'name' => 'Compensation Planning',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Compensation Planning',
                    'de' => 'Vergütungsplanung',
                    'es' => 'Planificación de Compensación',
                    'pl' => 'Planowanie Wynagrodzeń'
                ]),
                'scom' => 'Compensation planning and salary benchmarking services',
                'scom_translations' => json_encode([
                    'en' => 'Compensation planning and salary benchmarking services',
                    'de' => 'Vergütungsplanung und Gehaltsbenchmarking-Dienstleistungen',
                    'es' => 'Servicios de planificación de compensación y benchmarking salarial',
                    'pl' => 'Usługi planowania wynagrodzeń i benchmarkingu płacowego'
                ])
            ],
            [
                'id' => 78,
                'parent_id' => 6,
                'slug' => 'hr-technology-solutions',
                'name' => 'HR Technology Solutions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'HR Technology Solutions',
                    'de' => 'HR-Technologie-Lösungen',
                    'es' => 'Soluciones Tecnológicas de RRHH',
                    'pl' => 'Rozwiązania Technologiczne HR'
                ]),
                'scom' => 'HR technology platforms and software solutions',
                'scom_translations' => json_encode([
                    'en' => 'HR technology platforms and software solutions',
                    'de' => 'HR-Technologie-Plattformen und Software-Lösungen',
                    'es' => 'Plataformas tecnológicas de RRHH y soluciones de software',
                    'pl' => 'Platformy technologiczne HR i rozwiązania oprogramowania'
                ])
            ],
            [
                'id' => 79,
                'parent_id' => 6,
                'slug' => 'executive-search',
                'name' => 'Executive Search',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Executive Search',
                    'de' => 'Executive Search',
                    'es' => 'Búsqueda Ejecutiva',
                    'pl' => 'Poszukiwanie Kadry Kierowniczej'
                ]),
                'scom' => 'Executive search and senior-level recruitment services',
                'scom_translations' => json_encode([
                    'en' => 'Executive search and senior-level recruitment services',
                    'de' => 'Executive Search und Senior-Level-Rekrutierungsdienstleistungen',
                    'es' => 'Servicios de búsqueda ejecutiva y reclutamiento de alto nivel',
                    'pl' => 'Usługi poszukiwania kadry kierowniczej i rekrutacji na wyższych stanowiskach'
                ])
            ],
            [
                'id' => 80,
                'parent_id' => 6,
                'slug' => 'freelancer-platforms',
                'name' => 'Freelancer Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Freelancer Platforms',
                    'de' => 'Freelancer-Plattformen',
                    'es' => 'Plataformas de Freelancers',
                    'pl' => 'Platformy Freelancerów'
                ]),
                'scom' => 'Freelancer platforms and independent contractor management services',
                'scom_translations' => json_encode([
                    'en' => 'Freelancer platforms and independent contractor management services',
                    'de' => 'Freelancer-Plattformen und Verwaltungsdienstleistungen für unabhängige Auftragnehmer',
                    'es' => 'Plataformas de freelancers y servicios de gestión de contratistas independientes',
                    'pl' => 'Platformy freelancerów i usługi zarządzania niezależnymi wykonawcami'
                ])
            ],
            [
                'id' => 81,
                'parent_id' => 6,
                'slug' => 'remote-work-solutions',
                'name' => 'Remote Work Solutions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Remote Work Solutions',
                    'de' => 'Remote-Arbeitslösungen',
                    'es' => 'Soluciones de Trabajo Remoto',
                    'pl' => 'Rozwiązania Pracy Zdalnej'
                ]),
                'scom' => 'Remote work management and collaboration solutions',
                'scom_translations' => json_encode([
                    'en' => 'Remote work management and collaboration solutions',
                    'de' => 'Remote-Arbeitsmanagement und Kollaborationslösungen',
                    'es' => 'Soluciones de gestión de trabajo remoto y colaboración',
                    'pl' => 'Rozwiązania zarządzania pracą zdalną i współpracy'
                ])
            ],
            [
                'id' => 82,
                'parent_id' => 6,
                'slug' => 'other-human-resources',
                'name' => 'Other Human Resources',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Human Resources',
                    'de' => 'Andere Personaldienstleistungen',
                    'es' => 'Otros Servicios de Recursos Humanos',
                    'pl' => 'Inne Usługi Zasobów Ludzkich'
                ]),
                'scom' => 'Other human resources services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other human resources services not covered in specific categories',
                    'de' => 'Andere Personaldienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de recursos humanos no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi zasobów ludzkich nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 83,
                'parent_id' => 7,
                'slug' => 'sales-consulting',
                'name' => 'Sales Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales Consulting',
                    'de' => 'Vertriebsberatung',
                    'es' => 'Consultoría de Ventas',
                    'pl' => 'Doradztwo w Sprzedaży'
                ]),
                'scom' => 'Sales strategy consulting and sales process optimization services',
                'scom_translations' => json_encode([
                    'en' => 'Sales strategy consulting and sales process optimization services',
                    'de' => 'Vertriebsstrategie-Beratung und Vertriebsprozess-Optimierungsdienstleistungen',
                    'es' => 'Servicios de consultoría de estrategia de ventas y optimización de procesos de ventas',
                    'pl' => 'Usługi doradztwa w strategii sprzedaży i optymalizacji procesów sprzedażowych'
                ])
            ],
            [
                'id' => 84,
                'parent_id' => 7,
                'slug' => 'lead-generation-services',
                'name' => 'Lead Generation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lead Generation Services',
                    'de' => 'Lead-Generierungs-Dienstleistungen',
                    'es' => 'Servicios de Generación de Leads',
                    'pl' => 'Usługi Generowania Leadów'
                ]),
                'scom' => 'Lead generation and prospecting services for sales teams',
                'scom_translations' => json_encode([
                    'en' => 'Lead generation and prospecting services for sales teams',
                    'de' => 'Lead-Generierung und Prospektionsdienstleistungen für Vertriebsteams',
                    'es' => 'Servicios de generación de leads y prospección para equipos de ventas',
                    'pl' => 'Usługi generowania leadów i poszukiwania prospektów dla zespołów sprzedażowych'
                ])
            ],
            [
                'id' => 85,
                'parent_id' => 7,
                'slug' => 'customer-relationship-management',
                'name' => 'Customer Relationship Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Relationship Management',
                    'de' => 'Kundenbeziehungsmanagement',
                    'es' => 'Gestión de Relaciones con Clientes',
                    'pl' => 'Zarządzanie Relacjami z Klientami'
                ]),
                'scom' => 'CRM systems and customer relationship management services',
                'scom_translations' => json_encode([
                    'en' => 'CRM systems and customer relationship management services',
                    'de' => 'CRM-Systeme und Kundenbeziehungsmanagement-Dienstleistungen',
                    'es' => 'Sistemas CRM y servicios de gestión de relaciones con clientes',
                    'pl' => 'Systemy CRM i usługi zarządzania relacjami z klientami'
                ])
            ],
            [
                'id' => 86,
                'parent_id' => 7,
                'slug' => 'sales-training',
                'name' => 'Sales Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales Training',
                    'de' => 'Vertriebstraining',
                    'es' => 'Entrenamiento de Ventas',
                    'pl' => 'Szkolenia Sprzedażowe'
                ]),
                'scom' => 'Sales training and skill development programs for sales teams',
                'scom_translations' => json_encode([
                    'en' => 'Sales training and skill development programs for sales teams',
                    'de' => 'Vertriebstraining und Kompetenzentwicklungsprogramme für Vertriebsteams',
                    'es' => 'Programas de entrenamiento de ventas y desarrollo de habilidades para equipos de ventas',
                    'pl' => 'Programy szkoleń sprzedażowych i rozwoju umiejętności dla zespołów sprzedażowych'
                ])
            ],
            [
                'id' => 87,
                'parent_id' => 7,
                'slug' => 'customer-success-consulting',
                'name' => 'Customer Success Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Success Consulting',
                    'de' => 'Kundenerfolgs-Beratung',
                    'es' => 'Consultoría de Éxito del Cliente',
                    'pl' => 'Doradztwo w Sukcesie Klienta'
                ]),
                'scom' => 'Customer success strategy and implementation consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Customer success strategy and implementation consulting services',
                    'de' => 'Kundenerfolgs-Strategie und Implementierungsberatungsdienstleistungen',
                    'es' => 'Servicios de consultoría de estrategia e implementación de éxito del cliente',
                    'pl' => 'Usługi doradztwa w strategii i wdrażaniu sukcesu klienta'
                ])
            ],
            [
                'id' => 88,
                'parent_id' => 7,
                'slug' => 'business-development-services',
                'name' => 'Business Development Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Development Services',
                    'de' => 'Geschäftsentwicklungs-Dienstleistungen',
                    'es' => 'Servicios de Desarrollo de Negocios',
                    'pl' => 'Usługi Rozwoju Biznesu'
                ]),
                'scom' => 'Business development and partnership building services',
                'scom_translations' => json_encode([
                    'en' => 'Business development and partnership building services',
                    'de' => 'Geschäftsentwicklung und Partnerschaftsaufbau-Dienstleistungen',
                    'es' => 'Servicios de desarrollo de negocios y construcción de asociaciones',
                    'pl' => 'Usługi rozwoju biznesu i budowania partnerstw'
                ])
            ],
            [
                'id' => 89,
                'parent_id' => 7,
                'slug' => 'channel-partner-development',
                'name' => 'Channel Partner Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Channel Partner Development',
                    'de' => 'Kanal-Partner-Entwicklung',
                    'es' => 'Desarrollo de Socios de Canal',
                    'pl' => 'Rozwój Partnerów Kanałowych'
                ]),
                'scom' => 'Channel partner development and management services',
                'scom_translations' => json_encode([
                    'en' => 'Channel partner development and management services',
                    'de' => 'Kanal-Partner-Entwicklung und Managementdienstleistungen',
                    'es' => 'Servicios de desarrollo y gestión de socios de canal',
                    'pl' => 'Usługi rozwoju i zarządzania partnerami kanałowymi'
                ])
            ],
            [
                'id' => 90,
                'parent_id' => 7,
                'slug' => 'sales-technology-solutions',
                'name' => 'Sales Technology Solutions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales Technology Solutions',
                    'de' => 'Vertriebs-Technologie-Lösungen',
                    'es' => 'Soluciones Tecnológicas de Ventas',
                    'pl' => 'Rozwiązania Technologiczne Sprzedaży'
                ]),
                'scom' => 'Sales technology platforms and automation solutions',
                'scom_translations' => json_encode([
                    'en' => 'Sales technology platforms and automation solutions',
                    'de' => 'Vertriebs-Technologie-Plattformen und Automatisierungslösungen',
                    'es' => 'Plataformas tecnológicas de ventas y soluciones de automatización',
                    'pl' => 'Platformy technologiczne sprzedaży i rozwiązania automatyzacji'
                ])
            ],
            [
                'id' => 91,
                'parent_id' => 7,
                'slug' => 'customer-support-services',
                'name' => 'Customer Support Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Support Services',
                    'de' => 'Kundensupport-Dienstleistungen',
                    'es' => 'Servicios de Soporte al Cliente',
                    'pl' => 'Usługi Wsparcia Klienta'
                ]),
                'scom' => 'Customer support and help desk services',
                'scom_translations' => json_encode([
                    'en' => 'Customer support and help desk services',
                    'de' => 'Kundensupport und Help-Desk-Dienstleistungen',
                    'es' => 'Servicios de soporte al cliente y help desk',
                    'pl' => 'Usługi wsparcia klienta i help desk'
                ])
            ],
            [
                'id' => 92,
                'parent_id' => 7,
                'slug' => 'conversion-optimization',
                'name' => 'Conversion Optimization',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Conversion Optimization',
                    'de' => 'Conversion-Optimierung',
                    'es' => 'Optimización de Conversión',
                    'pl' => 'Optymalizacja Konwersji'
                ]),
                'scom' => 'Conversion rate optimization and sales funnel improvement services',
                'scom_translations' => json_encode([
                    'en' => 'Conversion rate optimization and sales funnel improvement services',
                    'de' => 'Conversion-Rate-Optimierung und Verbesserung des Sales-Funnels',
                    'es' => 'Servicios de optimización de tasa de conversión y mejora del embudo de ventas',
                    'pl' => 'Usługi optymalizacji współczynnika konwersji i poprawy lejka sprzedażowego'
                ])
            ],
            [
                'id' => 93,
                'parent_id' => 7,
                'slug' => 'other-sales-customer-success',
                'name' => 'Other Sales & Customer Success',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Sales & Customer Success',
                    'de' => 'Andere Vertriebs- und Kundenerfolgs-Dienstleistungen',
                    'es' => 'Otros Servicios de Ventas y Éxito del Cliente',
                    'pl' => 'Inne Usługi Sprzedaży i Sukcesu Klienta'
                ]),
                'scom' => 'Other sales and customer success services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other sales and customer success services not covered in specific categories',
                    'de' => 'Andere Vertriebs- und Kundenerfolgs-Dienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de ventas y éxito del cliente no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi sprzedaży i sukcesu klienta nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 94,
                'parent_id' => 8,
                'slug' => 'supply-chain-management',
                'name' => 'Supply Chain Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Supply Chain Management',
                    'de' => 'Lieferkettenmanagement',
                    'es' => 'Gestión de Cadena de Suministro',
                    'pl' => 'Zarządzanie Łańcuchem Dostaw'
                ]),
                'scom' => 'Supply chain management and optimization services for businesses',
                'scom_translations' => json_encode([
                    'en' => 'Supply chain management and optimization services for businesses',
                    'de' => 'Lieferkettenmanagement und Optimierungsdienstleistungen für Unternehmen',
                    'es' => 'Servicios de gestión y optimización de cadena de suministro para empresas',
                    'pl' => 'Usługi zarządzania i optymalizacji łańcucha dostaw dla firm'
                ])
            ],
            [
                'id' => 95,
                'parent_id' => 8,
                'slug' => 'fulfillment-warehousing',
                'name' => 'Fulfillment & Warehousing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fulfillment & Warehousing',
                    'de' => 'Fulfillment und Lagerhaltung',
                    'es' => 'Fulfillment y Almacenamiento',
                    'pl' => 'Realizacja Zamówień i Magazynowanie'
                ]),
                'scom' => 'Order fulfillment and warehousing services for e-commerce and retail',
                'scom_translations' => json_encode([
                    'en' => 'Order fulfillment and warehousing services for e-commerce and retail',
                    'de' => 'Auftragsabwicklung und Lagerhaltungsdienstleistungen für E-Commerce und Einzelhandel',
                    'es' => 'Servicios de fulfillment de pedidos y almacenamiento para e-commerce y retail',
                    'pl' => 'Usługi realizacji zamówień i magazynowania dla e-commerce i handlu detalicznego'
                ])
            ],
            [
                'id' => 96,
                'parent_id' => 8,
                'slug' => 'shipping-logistics',
                'name' => 'Shipping & Logistics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Shipping & Logistics',
                    'de' => 'Versand und Logistik',
                    'es' => 'Envío y Logística',
                    'pl' => 'Wysyłka i Logistyka'
                ]),
                'scom' => 'Shipping and logistics coordination services',
                'scom_translations' => json_encode([
                    'en' => 'Shipping and logistics coordination services',
                    'de' => 'Versand- und Logistikkoordinationsdienstleistungen',
                    'es' => 'Servicios de coordinación de envío y logística',
                    'pl' => 'Usługi koordynacji wysyłki i logistyki'
                ])
            ],
            [
                'id' => 97,
                'parent_id' => 8,
                'slug' => 'quality-control',
                'name' => 'Quality Control',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Quality Control',
                    'de' => 'Qualitätskontrolle',
                    'es' => 'Control de Calidad',
                    'pl' => 'Kontrola Jakości'
                ]),
                'scom' => 'Quality control and assurance services for products and processes',
                'scom_translations' => json_encode([
                    'en' => 'Quality control and assurance services for products and processes',
                    'de' => 'Qualitätskontrolle und Qualitätssicherungsdienstleistungen für Produkte und Prozesse',
                    'es' => 'Servicios de control y aseguramiento de calidad para productos y procesos',
                    'pl' => 'Usługi kontroli i zapewnienia jakości produktów i procesów'
                ])
            ],
            [
                'id' => 98,
                'parent_id' => 8,
                'slug' => 'manufacturing-consulting',
                'name' => 'Manufacturing Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Manufacturing Consulting',
                    'de' => 'Fertigungsberatung',
                    'es' => 'Consultoría de Manufactura',
                    'pl' => 'Doradztwo Produkcyjne'
                ]),
                'scom' => 'Manufacturing process consulting and optimization services',
                'scom_translations' => json_encode([
                    'en' => 'Manufacturing process consulting and optimization services',
                    'de' => 'Fertigungsprozess-Beratung und Optimierungsdienstleistungen',
                    'es' => 'Servicios de consultoría y optimización de procesos de manufactura',
                    'pl' => 'Usługi doradztwa i optymalizacji procesów produkcyjnych'
                ])
            ],
            [
                'id' => 99,
                'parent_id' => 8,
                'slug' => 'vendor-management',
                'name' => 'Vendor Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Vendor Management',
                    'de' => 'Lieferantenmanagement',
                    'es' => 'Gestión de Proveedores',
                    'pl' => 'Zarządzanie Dostawcami'
                ]),
                'scom' => 'Vendor selection, management and relationship services',
                'scom_translations' => json_encode([
                    'en' => 'Vendor selection, management and relationship services',
                    'de' => 'Lieferantenauswahl, -management und Beziehungsdienstleistungen',
                    'es' => 'Servicios de selección, gestión y relaciones con proveedores',
                    'pl' => 'Usługi selekcji, zarządzania i relacji z dostawcami'
                ])
            ],
            [
                'id' => 100,
                'parent_id' => 8,
                'slug' => 'process-optimization',
                'name' => 'Process Optimization',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Process Optimization',
                    'de' => 'Prozessoptimierung',
                    'es' => 'Optimización de Procesos',
                    'pl' => 'Optymalizacja Procesów'
                ]),
                'scom' => 'Business process optimization and efficiency improvement services',
                'scom_translations' => json_encode([
                    'en' => 'Business process optimization and efficiency improvement services',
                    'de' => 'Geschäftsprozessoptimierung und Effizienzverbesserungsdienstleistungen',
                    'es' => 'Servicios de optimización de procesos empresariales y mejora de eficiencia',
                    'pl' => 'Usługi optymalizacji procesów biznesowych i poprawy efektywności'
                ])
            ],
            [
                'id' => 101,
                'parent_id' => 8,
                'slug' => 'lean-operations-consulting',
                'name' => 'Lean Operations Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lean Operations Consulting',
                    'de' => 'Lean Operations Beratung',
                    'es' => 'Consultoría de Operaciones Lean',
                    'pl' => 'Doradztwo Lean Operations'
                ]),
                'scom' => 'Lean methodology and operations efficiency consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Lean methodology and operations efficiency consulting services',
                    'de' => 'Lean-Methodik und Betriebseffizienz-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría de metodología lean y eficiencia operacional',
                    'pl' => 'Usługi doradztwa w metodologii lean i efektywności operacyjnej'
                ])
            ],
            [
                'id' => 102,
                'parent_id' => 8,
                'slug' => 'international-trade-services',
                'name' => 'International Trade Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Trade Services',
                    'de' => 'Internationale Handelsdienstleistungen',
                    'es' => 'Servicios de Comercio Internacional',
                    'pl' => 'Usługi Handlu Międzynarodowego'
                ]),
                'scom' => 'International trade facilitation and customs services',
                'scom_translations' => json_encode([
                    'en' => 'International trade facilitation and customs services',
                    'de' => 'Internationale Handelserleichterung und Zolldienstleistungen',
                    'es' => 'Servicios de facilitación de comercio internacional y aduanas',
                    'pl' => 'Usługi ułatwiania handlu międzynarodowego i celne'
                ])
            ],
            [
                'id' => 103,
                'parent_id' => 8,
                'slug' => 'inventory-management',
                'name' => 'Inventory Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Inventory Management',
                    'de' => 'Bestandsmanagement',
                    'es' => 'Gestión de Inventario',
                    'pl' => 'Zarządzanie Zapasami'
                ]),
                'scom' => 'Inventory management and stock optimization services',
                'scom_translations' => json_encode([
                    'en' => 'Inventory management and stock optimization services',
                    'de' => 'Bestandsmanagement und Lageroptimierungsdienstleistungen',
                    'es' => 'Servicios de gestión de inventario y optimización de stock',
                    'pl' => 'Usługi zarządzania zapasami i optymalizacji magazynu'
                ])
            ],
            [
                'id' => 104,
                'parent_id' => 8,
                'slug' => 'other-operations-logistics',
                'name' => 'Other Operations & Logistics',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Operations & Logistics',
                    'de' => 'Andere Betriebs- und Logistikdienstleistungen',
                    'es' => 'Otros Servicios de Operaciones y Logística',
                    'pl' => 'Inne Usługi Operacji i Logistyki'
                ]),
                'scom' => 'Other operations and logistics services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other operations and logistics services not covered in specific categories',
                    'de' => 'Andere Betriebs- und Logistikdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de operaciones y logística no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi operacji i logistyki nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 105,
                'parent_id' => 9,
                'slug' => 'co-working-spaces',
                'name' => 'Co-working Spaces',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Co-working Spaces',
                    'de' => 'Co-Working-Spaces',
                    'es' => 'Espacios de Coworking',
                    'pl' => 'Przestrzenie Coworkingowe'
                ]),
                'scom' => 'Shared co-working spaces and flexible office solutions for startups',
                'scom_translations' => json_encode([
                    'en' => 'Shared co-working spaces and flexible office solutions for startups',
                    'de' => 'Geteilte Co-Working-Spaces und flexible Bürolösungen für Startups',
                    'es' => 'Espacios de coworking compartidos y soluciones de oficina flexibles para startups',
                    'pl' => 'Wspólne przestrzenie coworkingowe i elastyczne rozwiązania biurowe dla startupów'
                ])
            ],
            [
                'id' => 106,
                'parent_id' => 9,
                'slug' => 'office-leasing',
                'name' => 'Office Leasing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Office Leasing',
                    'de' => 'Bürovermietung',
                    'es' => 'Arrendamiento de Oficinas',
                    'pl' => 'Wynajem Biur'
                ]),
                'scom' => 'Commercial office leasing and rental services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial office leasing and rental services',
                    'de' => 'Gewerbliche Bürovermietungs- und Mietdienstleistungen',
                    'es' => 'Servicios de arrendamiento y alquiler de oficinas comerciales',
                    'pl' => 'Usługi wynajmu i dzierżawy biur komercyjnych'
                ])
            ],
            [
                'id' => 107,
                'parent_id' => 9,
                'slug' => 'commercial-real-estate',
                'name' => 'Commercial Real Estate',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Commercial Real Estate',
                    'de' => 'Gewerbeimmobilien',
                    'es' => 'Bienes Raíces Comerciales',
                    'pl' => 'Nieruchomości Komercyjne'
                ]),
                'scom' => 'Commercial real estate services and property management',
                'scom_translations' => json_encode([
                    'en' => 'Commercial real estate services and property management',
                    'de' => 'Gewerbeimmobilien-Dienstleistungen und Immobilienverwaltung',
                    'es' => 'Servicios de bienes raíces comerciales y gestión de propiedades',
                    'pl' => 'Usługi nieruchomości komercyjnych i zarządzanie nieruchomościami'
                ])
            ],
            [
                'id' => 108,
                'parent_id' => 9,
                'slug' => 'virtual-offices',
                'name' => 'Virtual Offices',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Virtual Offices',
                    'de' => 'Virtuelle Büros',
                    'es' => 'Oficinas Virtuales',
                    'pl' => 'Biura Wirtualne'
                ]),
                'scom' => 'Virtual office services and business address solutions',
                'scom_translations' => json_encode([
                    'en' => 'Virtual office services and business address solutions',
                    'de' => 'Virtuelle Bürodienstleistungen und Geschäftsadresslösungen',
                    'es' => 'Servicios de oficina virtual y soluciones de dirección comercial',
                    'pl' => 'Usługi biur wirtualnych i rozwiązania adresów biznesowych'
                ])
            ],
            [
                'id' => 109,
                'parent_id' => 9,
                'slug' => 'shared-office-services',
                'name' => 'Shared Office Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Shared Office Services',
                    'de' => 'Geteilte Bürodienstleistungen',
                    'es' => 'Servicios de Oficina Compartida',
                    'pl' => 'Usługi Wspólnych Biur'
                ]),
                'scom' => 'Shared office facilities and collaborative workspace services',
                'scom_translations' => json_encode([
                    'en' => 'Shared office facilities and collaborative workspace services',
                    'de' => 'Geteilte Büroeinrichtungen und kollaborative Arbeitsplatz-Dienstleistungen',
                    'es' => 'Instalaciones de oficina compartida y servicios de espacios de trabajo colaborativos',
                    'pl' => 'Wspólne pomieszczenia biurowe i usługi współpracy w przestrzeni roboczej'
                ])
            ],
            [
                'id' => 110,
                'parent_id' => 9,
                'slug' => 'facility-management',
                'name' => 'Facility Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Facility Management',
                    'de' => 'Facility Management',
                    'es' => 'Gestión de Instalaciones',
                    'pl' => 'Zarządzanie Obiektami'
                ]),
                'scom' => 'Facility management and building maintenance services',
                'scom_translations' => json_encode([
                    'en' => 'Facility management and building maintenance services',
                    'de' => 'Facility Management und Gebäudewartungsdienstleistungen',
                    'es' => 'Servicios de gestión de instalaciones y mantenimiento de edificios',
                    'pl' => 'Usługi zarządzania obiektami i konserwacji budynków'
                ])
            ],
            [
                'id' => 111,
                'parent_id' => 9,
                'slug' => 'office-design-build-out',
                'name' => 'Office Design & Build-out',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Office Design & Build-out',
                    'de' => 'Bürodesign und Ausbau',
                    'es' => 'Diseño y Construcción de Oficinas',
                    'pl' => 'Projektowanie i Wykończenie Biur'
                ]),
                'scom' => 'Office interior design and construction build-out services',
                'scom_translations' => json_encode([
                    'en' => 'Office interior design and construction build-out services',
                    'de' => 'Büro-Innendesign und Bauausbau-Dienstleistungen',
                    'es' => 'Servicios de diseño interior de oficinas y construcción',
                    'pl' => 'Usługi projektowania wnętrz biurowych i wykończenia budowlanego'
                ])
            ],
            [
                'id' => 112,
                'parent_id' => 9,
                'slug' => 'location-scouting',
                'name' => 'Location Scouting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Location Scouting',
                    'de' => 'Standortsuche',
                    'es' => 'Búsqueda de Ubicación',
                    'pl' => 'Poszukiwanie Lokalizacji'
                ]),
                'scom' => 'Business location scouting and site selection services',
                'scom_translations' => json_encode([
                    'en' => 'Business location scouting and site selection services',
                    'de' => 'Geschäftsstandortsuche und Standortauswahldienstleistungen',
                    'es' => 'Servicios de búsqueda de ubicación empresarial y selección de sitios',
                    'pl' => 'Usługi poszukiwania lokalizacji biznesowej i wyboru miejsca'
                ])
            ],
            [
                'id' => 113,
                'parent_id' => 9,
                'slug' => 'property-management',
                'name' => 'Property Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Property Management',
                    'de' => 'Immobilienverwaltung',
                    'es' => 'Gestión de Propiedades',
                    'pl' => 'Zarządzanie Nieruchomościami'
                ]),
                'scom' => 'Commercial property management and administration services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial property management and administration services',
                    'de' => 'Gewerbliche Immobilienverwaltung und Verwaltungsdienstleistungen',
                    'es' => 'Servicios de gestión y administración de propiedades comerciales',
                    'pl' => 'Usługi zarządzania i administracji nieruchomości komercyjnych'
                ])
            ],
            [
                'id' => 114,
                'parent_id' => 9,
                'slug' => 'lease-negotiation',
                'name' => 'Lease Negotiation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lease Negotiation',
                    'de' => 'Mietverhandlung',
                    'es' => 'Negociación de Arrendamiento',
                    'pl' => 'Negocjacja Umów Najmu'
                ]),
                'scom' => 'Commercial lease negotiation and contract advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Commercial lease negotiation and contract advisory services',
                    'de' => 'Gewerbliche Mietverhandlungs- und Vertragsberatungsdienstleistungen',
                    'es' => 'Servicios de negociación de arrendamiento comercial y asesoría contractual',
                    'pl' => 'Usługi negocjacji najmu komercyjnego i doradztwa umownego'
                ])
            ],
            [
                'id' => 115,
                'parent_id' => 9,
                'slug' => 'other-real-estate-facilities',
                'name' => 'Other Real Estate & Facilities',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Real Estate & Facilities',
                    'de' => 'Andere Immobilien- und Einrichtungsdienstleistungen',
                    'es' => 'Otros Servicios de Bienes Raíces e Instalaciones',
                    'pl' => 'Inne Usługi Nieruchomości i Obiektów'
                ]),
                'scom' => 'Other real estate and facilities services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other real estate and facilities services not covered in specific categories',
                    'de' => 'Andere Immobilien- und Einrichtungsdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de bienes raíces e instalaciones no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi nieruchomości i obiektów nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 116,
                'parent_id' => 10,
                'slug' => 'startup-accelerators',
                'name' => 'Startup Accelerators',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Accelerators',
                    'de' => 'Startup-Acceleratoren',
                    'es' => 'Aceleradoras de Startups',
                    'pl' => 'Akceleratory Startupów'
                ]),
                'scom' => 'Startup acceleration programs and mentorship services',
                'scom_translations' => json_encode([
                    'en' => 'Startup acceleration programs and mentorship services',
                    'de' => 'Startup-Beschleunigungsprogramme und Mentoring-Dienstleistungen',
                    'es' => 'Programas de aceleración de startups y servicios de mentoría',
                    'pl' => 'Programy akceleracji startupów i usługi mentoringu'
                ])
            ],
            [
                'id' => 117,
                'parent_id' => 10,
                'slug' => 'business-incubators',
                'name' => 'Business Incubators',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Incubators',
                    'de' => 'Business-Inkubatoren',
                    'es' => 'Incubadoras de Negocios',
                    'pl' => 'Inkubatory Biznesu'
                ]),
                'scom' => 'Business incubation programs and early-stage support services',
                'scom_translations' => json_encode([
                    'en' => 'Business incubation programs and early-stage support services',
                    'de' => 'Business-Inkubationsprogramme und Frühphasen-Unterstützungsdienstleistungen',
                    'es' => 'Programas de incubación de negocios y servicios de apoyo en etapa temprana',
                    'pl' => 'Programy inkubacji biznesu i usługi wsparcia wczesnego etapu'
                ])
            ],
            [
                'id' => 118,
                'parent_id' => 10,
                'slug' => 'entrepreneurship-programs',
                'name' => 'Entrepreneurship Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Entrepreneurship Programs',
                    'de' => 'Unternehmertum-Programme',
                    'es' => 'Programas de Emprendimiento',
                    'pl' => 'Programy Przedsiębiorczości'
                ]),
                'scom' => 'Entrepreneurship education and training programs',
                'scom_translations' => json_encode([
                    'en' => 'Entrepreneurship education and training programs',
                    'de' => 'Unternehmertum-Bildung und Ausbildungsprogramme',
                    'es' => 'Programas de educación y capacitación en emprendimiento',
                    'pl' => 'Programy edukacji i szkoleń z przedsiębiorczości'
                ])
            ],
            [
                'id' => 119,
                'parent_id' => 10,
                'slug' => 'skills-training',
                'name' => 'Skills Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Skills Training',
                    'de' => 'Kompetenztraining',
                    'es' => 'Entrenamiento de Habilidades',
                    'pl' => 'Szkolenia Umiejętności'
                ]),
                'scom' => 'Professional skills training and development programs',
                'scom_translations' => json_encode([
                    'en' => 'Professional skills training and development programs',
                    'de' => 'Professionelle Kompetenztraining und Entwicklungsprogramme',
                    'es' => 'Programas de entrenamiento y desarrollo de habilidades profesionales',
                    'pl' => 'Programy szkoleń i rozwoju umiejętności zawodowych'
                ])
            ],
            [
                'id' => 120,
                'parent_id' => 10,
                'slug' => 'leadership-development',
                'name' => 'Leadership Development',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Leadership Development',
                    'de' => 'Führungskräfteentwicklung',
                    'es' => 'Desarrollo de Liderazgo',
                    'pl' => 'Rozwój Przywództwa'
                ]),
                'scom' => 'Leadership development and management training programs',
                'scom_translations' => json_encode([
                    'en' => 'Leadership development and management training programs',
                    'de' => 'Führungskräfteentwicklung und Management-Trainingsprogramme',
                    'es' => 'Programas de desarrollo de liderazgo y entrenamiento gerencial',
                    'pl' => 'Programy rozwoju przywództwa i szkoleń menedżerskich'
                ])
            ],
            [
                'id' => 121,
                'parent_id' => 10,
                'slug' => 'technical-training',
                'name' => 'Technical Training',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technical Training',
                    'de' => 'Technische Ausbildung',
                    'es' => 'Capacitación Técnica',
                    'pl' => 'Szkolenia Techniczne'
                ]),
                'scom' => 'Technical and specialized skills training programs',
                'scom_translations' => json_encode([
                    'en' => 'Technical and specialized skills training programs',
                    'de' => 'Technische und spezialisierte Kompetenz-Trainingsprogramme',
                    'es' => 'Programas de capacitación técnica y habilidades especializadas',
                    'pl' => 'Programy szkoleń technicznych i specjalistycznych umiejętności'
                ])
            ],
            [
                'id' => 122,
                'parent_id' => 10,
                'slug' => 'industry-certifications',
                'name' => 'Industry Certifications',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Certifications',
                    'de' => 'Branchenzertifizierungen',
                    'es' => 'Certificaciones de la Industria',
                    'pl' => 'Certyfikaty Branżowe'
                ]),
                'scom' => 'Professional industry certifications and credential programs',
                'scom_translations' => json_encode([
                    'en' => 'Professional industry certifications and credential programs',
                    'de' => 'Professionelle Branchenzertifizierungen und Qualifikationsprogramme',
                    'es' => 'Certificaciones profesionales de la industria y programas de credenciales',
                    'pl' => 'Profesjonalne certyfikaty branżowe i programy kwalifikacyjne'
                ])
            ],
            [
                'id' => 123,
                'parent_id' => 10,
                'slug' => 'mentorship-programs',
                'name' => 'Mentorship Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mentorship Programs',
                    'de' => 'Mentoring-Programme',
                    'es' => 'Programas de Mentoría',
                    'pl' => 'Programy Mentoringu'
                ]),
                'scom' => 'Professional mentorship and guidance programs for entrepreneurs',
                'scom_translations' => json_encode([
                    'en' => 'Professional mentorship and guidance programs for entrepreneurs',
                    'de' => 'Professionelle Mentoring- und Beratungsprogramme für Unternehmer',
                    'es' => 'Programas profesionales de mentoría y orientación para emprendedores',
                    'pl' => 'Profesjonalne programy mentoringu i wskazówek dla przedsiębiorców'
                ])
            ],
            [
                'id' => 124,
                'parent_id' => 10,
                'slug' => 'workshops-seminars',
                'name' => 'Workshops & Seminars',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Workshops & Seminars',
                    'de' => 'Workshops und Seminare',
                    'es' => 'Talleres y Seminarios',
                    'pl' => 'Warsztaty i Seminaria'
                ]),
                'scom' => 'Professional workshops and educational seminars for business development',
                'scom_translations' => json_encode([
                    'en' => 'Professional workshops and educational seminars for business development',
                    'de' => 'Professionelle Workshops und Bildungsseminare für Geschäftsentwicklung',
                    'es' => 'Talleres profesionales y seminarios educativos para desarrollo empresarial',
                    'pl' => 'Profesjonalne warsztaty i seminaria edukacyjne dla rozwoju biznesu'
                ])
            ],
            [
                'id' => 125,
                'parent_id' => 10,
                'slug' => 'online-learning-platforms',
                'name' => 'Online Learning Platforms',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Learning Platforms',
                    'de' => 'Online-Lernplattformen',
                    'es' => 'Plataformas de Aprendizaje Online',
                    'pl' => 'Platformy Nauki Online'
                ]),
                'scom' => 'Online learning platforms and digital education services',
                'scom_translations' => json_encode([
                    'en' => 'Online learning platforms and digital education services',
                    'de' => 'Online-Lernplattformen und digitale Bildungsdienstleistungen',
                    'es' => 'Plataformas de aprendizaje online y servicios de educación digital',
                    'pl' => 'Platformy nauki online i usługi edukacji cyfrowej'
                ])
            ],
            [
                'id' => 126,
                'parent_id' => 10,
                'slug' => 'other-education-training',
                'name' => 'Other Education & Training',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Education & Training',
                    'de' => 'Andere Bildungs- und Ausbildungsdienstleistungen',
                    'es' => 'Otros Servicios de Educación y Capacitación',
                    'pl' => 'Inne Usługi Edukacji i Szkoleń'
                ]),
                'scom' => 'Other education and training services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other education and training services not covered in specific categories',
                    'de' => 'Andere Bildungs- und Ausbildungsdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de educación y capacitación no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi edukacji i szkoleń nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 127,
                'parent_id' => 11,
                'slug' => 'branding-identity-design',
                'name' => 'Branding & Identity Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Branding & Identity Design',
                    'de' => 'Branding und Identitätsdesign',
                    'es' => 'Branding y Diseño de Identidad',
                    'pl' => 'Branding i Projektowanie Tożsamości'
                ]),
                'scom' => 'Brand identity development and visual branding design services',
                'scom_translations' => json_encode([
                    'en' => 'Brand identity development and visual branding design services',
                    'de' => 'Markenidentitätsentwicklung und visuelle Branding-Design-Dienstleistungen',
                    'es' => 'Servicios de desarrollo de identidad de marca y diseño de branding visual',
                    'pl' => 'Usługi rozwoju tożsamości marki i projektowania brandingu wizualnego'
                ])
            ],
            [
                'id' => 128,
                'parent_id' => 11,
                'slug' => 'marketing-materials-design',
                'name' => 'Marketing Materials Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing Materials Design',
                    'de' => 'Marketing-Material-Design',
                    'es' => 'Diseño de Materiales de Marketing',
                    'pl' => 'Projektowanie Materiałów Marketingowych'
                ]),
                'scom' => 'Marketing collateral and promotional materials design services',
                'scom_translations' => json_encode([
                    'en' => 'Marketing collateral and promotional materials design services',
                    'de' => 'Marketing-Begleitmaterial und Werbematerial-Design-Dienstleistungen',
                    'es' => 'Servicios de diseño de material de marketing y materiales promocionales',
                    'pl' => 'Usługi projektowania materiałów marketingowych i promocyjnych'
                ])
            ],
            [
                'id' => 129,
                'parent_id' => 11,
                'slug' => 'website-design',
                'name' => 'Website Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Website Design',
                    'de' => 'Website-Design',
                    'es' => 'Diseño de Sitios Web',
                    'pl' => 'Projektowanie Stron Internetowych'
                ]),
                'scom' => 'Creative website design and web interface design services',
                'scom_translations' => json_encode([
                    'en' => 'Creative website design and web interface design services',
                    'de' => 'Kreatives Website-Design und Web-Interface-Design-Dienstleistungen',
                    'es' => 'Servicios de diseño creativo de sitios web y diseño de interfaces web',
                    'pl' => 'Usługi kreatywnego projektowania stron internetowych i interfejsów webowych'
                ])
            ],
            [
                'id' => 130,
                'parent_id' => 11,
                'slug' => 'photography-services',
                'name' => 'Photography Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Photography Services',
                    'de' => 'Fotografie-Dienstleistungen',
                    'es' => 'Servicios de Fotografía',
                    'pl' => 'Usługi Fotograficzne'
                ]),
                'scom' => 'Professional photography services for business and marketing needs',
                'scom_translations' => json_encode([
                    'en' => 'Professional photography services for business and marketing needs',
                    'de' => 'Professionelle Fotografie-Dienstleistungen für Geschäfts- und Marketing-Bedürfnisse',
                    'es' => 'Servicios de fotografía profesional para necesidades empresariales y de marketing',
                    'pl' => 'Profesjonalne usługi fotograficzne dla potrzeb biznesowych i marketingowych'
                ])
            ],
            [
                'id' => 131,
                'parent_id' => 11,
                'slug' => 'video-production-creative',
                'name' => 'Video Production',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Video Production',
                    'de' => 'Videoproduktion',
                    'es' => 'Producción de Video',
                    'pl' => 'Produkcja Wideo'
                ]),
                'scom' => 'Creative video production and multimedia content creation services',
                'scom_translations' => json_encode([
                    'en' => 'Creative video production and multimedia content creation services',
                    'de' => 'Kreative Videoproduktion und Multimedia-Content-Erstellungsdienstleistungen',
                    'es' => 'Servicios de producción de video creativo y creación de contenido multimedia',
                    'pl' => 'Usługi kreatywnej produkcji wideo i tworzenia treści multimedialnych'
                ])
            ],
            [
                'id' => 132,
                'parent_id' => 11,
                'slug' => 'copywriting',
                'name' => 'Copywriting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Copywriting',
                    'de' => 'Copywriting',
                    'es' => 'Redacción Publicitaria',
                    'pl' => 'Copywriting'
                ]),
                'scom' => 'Professional copywriting and content writing services',
                'scom_translations' => json_encode([
                    'en' => 'Professional copywriting and content writing services',
                    'de' => 'Professionelle Copywriting- und Content-Writing-Dienstleistungen',
                    'es' => 'Servicios profesionales de redacción publicitaria y escritura de contenido',
                    'pl' => 'Profesjonalne usługi copywritingu i pisania treści'
                ])
            ],
            [
                'id' => 133,
                'parent_id' => 11,
                'slug' => 'content-creation',
                'name' => 'Content Creation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Creation',
                    'de' => 'Content-Erstellung',
                    'es' => 'Creación de Contenido',
                    'pl' => 'Tworzenie Treści'
                ]),
                'scom' => 'Creative content creation and digital media production services',
                'scom_translations' => json_encode([
                    'en' => 'Creative content creation and digital media production services',
                    'de' => 'Kreative Content-Erstellung und digitale Medienproduktionsdienstleistungen',
                    'es' => 'Servicios de creación de contenido creativo y producción de medios digitales',
                    'pl' => 'Usługi kreatywnego tworzenia treści i produkcji mediów cyfrowych'
                ])
            ],
            [
                'id' => 134,
                'parent_id' => 11,
                'slug' => 'animation-services',
                'name' => 'Animation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Animation Services',
                    'de' => 'Animations-Dienstleistungen',
                    'es' => 'Servicios de Animación',
                    'pl' => 'Usługi Animacji'
                ]),
                'scom' => 'Animation and motion graphics design services',
                'scom_translations' => json_encode([
                    'en' => 'Animation and motion graphics design services',
                    'de' => 'Animations- und Motion-Graphics-Design-Dienstleistungen',
                    'es' => 'Servicios de animación y diseño de gráficos en movimiento',
                    'pl' => 'Usługi animacji i projektowania grafiki ruchomej'
                ])
            ],
            [
                'id' => 135,
                'parent_id' => 11,
                'slug' => 'print-design',
                'name' => 'Print Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Print Design',
                    'de' => 'Print-Design',
                    'es' => 'Diseño de Impresión',
                    'pl' => 'Projektowanie do Druku'
                ]),
                'scom' => 'Print design and publishing layout services',
                'scom_translations' => json_encode([
                    'en' => 'Print design and publishing layout services',
                    'de' => 'Print-Design und Verlagslayout-Dienstleistungen',
                    'es' => 'Servicios de diseño de impresión y maquetación editorial',
                    'pl' => 'Usługi projektowania do druku i layoutu wydawniczego'
                ])
            ],
            [
                'id' => 136,
                'parent_id' => 11,
                'slug' => 'packaging-design',
                'name' => 'Packaging Design',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Packaging Design',
                    'de' => 'Verpackungsdesign',
                    'es' => 'Diseño de Empaques',
                    'pl' => 'Projektowanie Opakowań'
                ]),
                'scom' => 'Product packaging design and label design services',
                'scom_translations' => json_encode([
                    'en' => 'Product packaging design and label design services',
                    'de' => 'Produktverpackungsdesign und Etikettendesign-Dienstleistungen',
                    'es' => 'Servicios de diseño de empaques de productos y diseño de etiquetas',
                    'pl' => 'Usługi projektowania opakowań produktów i etykiet'
                ])
            ],
            [
                'id' => 137,
                'parent_id' => 11,
                'slug' => 'other-creative-services',
                'name' => 'Other Creative Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Creative Services',
                    'de' => 'Andere Kreativdienstleistungen',
                    'es' => 'Otros Servicios Creativos',
                    'pl' => 'Inne Usługi Kreatywne'
                ]),
                'scom' => 'Other creative services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other creative services not covered in specific categories',
                    'de' => 'Andere Kreativdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios creativos no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi kreatywne nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 138,
                'parent_id' => 12,
                'slug' => 'data-analytics-services',
                'name' => 'Data Analytics Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Data Analytics Services',
                    'de' => 'Datenanalytik-Dienstleistungen',
                    'es' => 'Servicios de Analítica de Datos',
                    'pl' => 'Usługi Analityki Danych'
                ]),
                'scom' => 'Comprehensive data analytics and data science services for businesses',
                'scom_translations' => json_encode([
                    'en' => 'Comprehensive data analytics and data science services for businesses',
                    'de' => 'Umfassende Datenanalytik und Data Science Dienstleistungen für Unternehmen',
                    'es' => 'Servicios integrales de analítica de datos y ciencia de datos para empresas',
                    'pl' => 'Kompleksowe usługi analityki danych i nauki o danych dla firm'
                ])
            ],
            [
                'id' => 139,
                'parent_id' => 12,
                'slug' => 'business-intelligence',
                'name' => 'Business Intelligence',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Intelligence',
                    'de' => 'Business Intelligence',
                    'es' => 'Inteligencia de Negocios',
                    'pl' => 'Business Intelligence'
                ]),
                'scom' => 'Business intelligence platforms and reporting solutions',
                'scom_translations' => json_encode([
                    'en' => 'Business intelligence platforms and reporting solutions',
                    'de' => 'Business Intelligence Plattformen und Reporting-Lösungen',
                    'es' => 'Plataformas de inteligencia de negocios y soluciones de reportes',
                    'pl' => 'Platformy business intelligence i rozwiązania raportowania'
                ])
            ],
            [
                'id' => 140,
                'parent_id' => 12,
                'slug' => 'market-research-analytics',
                'name' => 'Market Research',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Market Research',
                    'de' => 'Marktforschung',
                    'es' => 'Investigación de Mercado',
                    'pl' => 'Badania Rynku'
                ]),
                'scom' => 'Market research and consumer analytics services',
                'scom_translations' => json_encode([
                    'en' => 'Market research and consumer analytics services',
                    'de' => 'Marktforschung und Verbraucheranalytik-Dienstleistungen',
                    'es' => 'Servicios de investigación de mercado y analítica del consumidor',
                    'pl' => 'Usługi badań rynku i analityki konsumenckiej'
                ])
            ],
            [
                'id' => 141,
                'parent_id' => 12,
                'slug' => 'customer-analytics',
                'name' => 'Customer Analytics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Analytics',
                    'de' => 'Kundenanalytik',
                    'es' => 'Analítica de Clientes',
                    'pl' => 'Analityka Klientów'
                ]),
                'scom' => 'Customer behavior analytics and segmentation services',
                'scom_translations' => json_encode([
                    'en' => 'Customer behavior analytics and segmentation services',
                    'de' => 'Kundenverhalten-Analytik und Segmentierungsdienstleistungen',
                    'es' => 'Servicios de analítica de comportamiento del cliente y segmentación',
                    'pl' => 'Usługi analityki zachowań klientów i segmentacji'
                ])
            ],
            [
                'id' => 142,
                'parent_id' => 12,
                'slug' => 'performance-tracking',
                'name' => 'Performance Tracking',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Performance Tracking',
                    'de' => 'Performance-Tracking',
                    'es' => 'Seguimiento de Rendimiento',
                    'pl' => 'Śledzenie Wydajności'
                ]),
                'scom' => 'Business performance tracking and KPI monitoring services',
                'scom_translations' => json_encode([
                    'en' => 'Business performance tracking and KPI monitoring services',
                    'de' => 'Geschäftsleistungsverfolgungs- und KPI-Überwachungsdienstleistungen',
                    'es' => 'Servicios de seguimiento de rendimiento empresarial y monitoreo de KPI',
                    'pl' => 'Usługi śledzenia wydajności biznesowej i monitorowania KPI'
                ])
            ],
            [
                'id' => 143,
                'parent_id' => 12,
                'slug' => 'data-visualization',
                'name' => 'Data Visualization',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Data Visualization',
                    'de' => 'Datenvisualisierung',
                    'es' => 'Visualización de Datos',
                    'pl' => 'Wizualizacja Danych'
                ]),
                'scom' => 'Data visualization and dashboard creation services',
                'scom_translations' => json_encode([
                    'en' => 'Data visualization and dashboard creation services',
                    'de' => 'Datenvisualisierung und Dashboard-Erstellungsdienstleistungen',
                    'es' => 'Servicios de visualización de datos y creación de dashboards',
                    'pl' => 'Usługi wizualizacji danych i tworzenia dashboardów'
                ])
            ],
            [
                'id' => 144,
                'parent_id' => 12,
                'slug' => 'statistical-analysis',
                'name' => 'Statistical Analysis',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Statistical Analysis',
                    'de' => 'Statistische Analyse',
                    'es' => 'Análisis Estadístico',
                    'pl' => 'Analiza Statystyczna'
                ]),
                'scom' => 'Statistical analysis and data modeling services',
                'scom_translations' => json_encode([
                    'en' => 'Statistical analysis and data modeling services',
                    'de' => 'Statistische Analyse und Datenmodellierungsdienstleistungen',
                    'es' => 'Servicios de análisis estadístico y modelado de datos',
                    'pl' => 'Usługi analizy statystycznej i modelowania danych'
                ])
            ],
            [
                'id' => 145,
                'parent_id' => 12,
                'slug' => 'predictive-analytics',
                'name' => 'Predictive Analytics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Predictive Analytics',
                    'de' => 'Predictive Analytics',
                    'es' => 'Analítica Predictiva',
                    'pl' => 'Analityka Predykcyjna'
                ]),
                'scom' => 'Predictive analytics and forecasting services',
                'scom_translations' => json_encode([
                    'en' => 'Predictive analytics and forecasting services',
                    'de' => 'Predictive Analytics und Prognosedienstleistungen',
                    'es' => 'Servicios de analítica predictiva y pronósticos',
                    'pl' => 'Usługi analityki predykcyjnej i prognozowania'
                ])
            ],
            [
                'id' => 146,
                'parent_id' => 12,
                'slug' => 'survey-services',
                'name' => 'Survey Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Survey Services',
                    'de' => 'Umfrage-Dienstleistungen',
                    'es' => 'Servicios de Encuestas',
                    'pl' => 'Usługi Ankietowe'
                ]),
                'scom' => 'Survey design, implementation and analysis services',
                'scom_translations' => json_encode([
                    'en' => 'Survey design, implementation and analysis services',
                    'de' => 'Umfrage-Design, Implementierung und Analysedienstleistungen',
                    'es' => 'Servicios de diseño, implementación y análisis de encuestas',
                    'pl' => 'Usługi projektowania, wdrażania i analizy ankiet'
                ])
            ],
            [
                'id' => 147,
                'parent_id' => 12,
                'slug' => 'ab-testing-services',
                'name' => 'A/B Testing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'A/B Testing Services',
                    'de' => 'A/B-Testing-Dienstleistungen',
                    'es' => 'Servicios de Pruebas A/B',
                    'pl' => 'Usługi Testów A/B'
                ]),
                'scom' => 'A/B testing and conversion optimization services',
                'scom_translations' => json_encode([
                    'en' => 'A/B testing and conversion optimization services',
                    'de' => 'A/B-Testing und Conversion-Optimierungsdienstleistungen',
                    'es' => 'Servicios de pruebas A/B y optimización de conversión',
                    'pl' => 'Usługi testów A/B i optymalizacji konwersji'
                ])
            ],
            [
                'id' => 148,
                'parent_id' => 12,
                'slug' => 'other-data-analytics',
                'name' => 'Other Data & Analytics',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Data & Analytics',
                    'de' => 'Andere Daten- und Analytikdienstleistungen',
                    'es' => 'Otros Servicios de Datos y Analítica',
                    'pl' => 'Inne Usługi Danych i Analityki'
                ]),
                'scom' => 'Other data and analytics services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other data and analytics services not covered in specific categories',
                    'de' => 'Andere Daten- und Analytikdienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de datos y analítica no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi danych i analityki nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 149,
                'parent_id' => 13,
                'slug' => 'startup-events-conferences',
                'name' => 'Startup Events & Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Events & Conferences',
                    'de' => 'Startup-Events und Konferenzen',
                    'es' => 'Eventos y Conferencias de Startups',
                    'pl' => 'Wydarzenia i Konferencje Startupowe'
                ]),
                'scom' => 'Startup-focused events, conferences and industry gatherings',
                'scom_translations' => json_encode([
                    'en' => 'Startup-focused events, conferences and industry gatherings',
                    'de' => 'Startup-fokussierte Events, Konferenzen und Branchentreffen',
                    'es' => 'Eventos, conferencias y reuniones de la industria enfocados en startups',
                    'pl' => 'Wydarzenia, konferencje i spotkania branżowe skupione na startupach'
                ])
            ],
            [
                'id' => 150,
                'parent_id' => 13,
                'slug' => 'networking-organizations',
                'name' => 'Networking Organizations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Networking Organizations',
                    'de' => 'Networking-Organisationen',
                    'es' => 'Organizaciones de Networking',
                    'pl' => 'Organizacje Networkingowe'
                ]),
                'scom' => 'Professional networking organizations and business networking groups',
                'scom_translations' => json_encode([
                    'en' => 'Professional networking organizations and business networking groups',
                    'de' => 'Professionelle Networking-Organisationen und Business-Networking-Gruppen',
                    'es' => 'Organizaciones de networking profesional y grupos de networking empresarial',
                    'pl' => 'Profesjonalne organizacje networkingowe i grupy networkingu biznesowego'
                ])
            ],
            [
                'id' => 151,
                'parent_id' => 13,
                'slug' => 'industry-meetups',
                'name' => 'Industry Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Meetups',
                    'de' => 'Branchen-Meetups',
                    'es' => 'Meetups de la Industria',
                    'pl' => 'Spotkania Branżowe'
                ]),
                'scom' => 'Industry-specific meetups and professional gatherings',
                'scom_translations' => json_encode([
                    'en' => 'Industry-specific meetups and professional gatherings',
                    'de' => 'Branchenspezifische Meetups und professionelle Zusammenkünfte',
                    'es' => 'Meetups específicos de la industria y reuniones profesionales',
                    'pl' => 'Spotkania branżowe i profesjonalne zgromadzenia'
                ])
            ],
            [
                'id' => 152,
                'parent_id' => 13,
                'slug' => 'trade-shows',
                'name' => 'Trade Shows',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trade Shows',
                    'de' => 'Fachmessen',
                    'es' => 'Ferias Comerciales',
                    'pl' => 'Targi Handlowe'
                ]),
                'scom' => 'Trade shows and industry exhibitions for business development',
                'scom_translations' => json_encode([
                    'en' => 'Trade shows and industry exhibitions for business development',
                    'de' => 'Fachmessen und Industrieausstellungen für Geschäftsentwicklung',
                    'es' => 'Ferias comerciales y exposiciones industriales para desarrollo empresarial',
                    'pl' => 'Targi handlowe i wystawy przemysłowe dla rozwoju biznesu'
                ])
            ],
            [
                'id' => 153,
                'parent_id' => 13,
                'slug' => 'demo-days',
                'name' => 'Demo Days',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Demo Days',
                    'de' => 'Demo Days',
                    'es' => 'Días de Demostración',
                    'pl' => 'Dni Demonstracji'
                ]),
                'scom' => 'Startup demo days and product showcase events',
                'scom_translations' => json_encode([
                    'en' => 'Startup demo days and product showcase events',
                    'de' => 'Startup Demo Days und Produktpräsentationsveranstaltungen',
                    'es' => 'Días de demostración de startups y eventos de exhibición de productos',
                    'pl' => 'Dni demonstracji startupów i wydarzenia prezentacji produktów'
                ])
            ],
            [
                'id' => 154,
                'parent_id' => 13,
                'slug' => 'pitch-competitions',
                'name' => 'Pitch Competitions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pitch Competitions',
                    'de' => 'Pitch-Wettbewerbe',
                    'es' => 'Competencias de Pitch',
                    'pl' => 'Konkursy Pitch'
                ]),
                'scom' => 'Startup pitch competitions and entrepreneurship contests',
                'scom_translations' => json_encode([
                    'en' => 'Startup pitch competitions and entrepreneurship contests',
                    'de' => 'Startup Pitch-Wettbewerbe und Unternehmertums-Contests',
                    'es' => 'Competencias de pitch de startups y concursos de emprendimiento',
                    'pl' => 'Konkursy pitch startupów i zawody przedsiębiorczości'
                ])
            ],
            [
                'id' => 155,
                'parent_id' => 13,
                'slug' => 'professional-associations',
                'name' => 'Professional Associations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Professional Associations',
                    'de' => 'Berufsverbände',
                    'es' => 'Asociaciones Profesionales',
                    'pl' => 'Stowarzyszenia Zawodowe'
                ]),
                'scom' => 'Professional associations and industry membership organizations',
                'scom_translations' => json_encode([
                    'en' => 'Professional associations and industry membership organizations',
                    'de' => 'Berufsverbände und Branchenmitgliedsorganisationen',
                    'es' => 'Asociaciones profesionales y organizaciones de membresía de la industria',
                    'pl' => 'Stowarzyszenia zawodowe i organizacje członkowskie branży'
                ])
            ],
            [
                'id' => 156,
                'parent_id' => 13,
                'slug' => 'mastermind-groups',
                'name' => 'Mastermind Groups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mastermind Groups',
                    'de' => 'Mastermind-Gruppen',
                    'es' => 'Grupos Mastermind',
                    'pl' => 'Grupy Mastermind'
                ]),
                'scom' => 'Mastermind groups and peer mentoring circles for entrepreneurs',
                'scom_translations' => json_encode([
                    'en' => 'Mastermind groups and peer mentoring circles for entrepreneurs',
                    'de' => 'Mastermind-Gruppen und Peer-Mentoring-Kreise für Unternehmer',
                    'es' => 'Grupos mastermind y círculos de mentoría entre pares para emprendedores',
                    'pl' => 'Grupy mastermind i kręgi mentoringu rówieśniczego dla przedsiębiorców'
                ])
            ],
            [
                'id' => 157,
                'parent_id' => 13,
                'slug' => 'speaker-bureaus',
                'name' => 'Speaker Bureaus',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Speaker Bureaus',
                    'de' => 'Speaker-Büros',
                    'es' => 'Agencias de Oradores',
                    'pl' => 'Biura Prelegentów'
                ]),
                'scom' => 'Speaker bureaus and keynote speaker booking services',
                'scom_translations' => json_encode([
                    'en' => 'Speaker bureaus and keynote speaker booking services',
                    'de' => 'Speaker-Büros und Keynote-Speaker-Buchungsdienstleistungen',
                    'es' => 'Agencias de oradores y servicios de reserva de oradores principales',
                    'pl' => 'Biura prelegentów i usługi rezerwacji głównych mówców'
                ])
            ],
            [
                'id' => 158,
                'parent_id' => 13,
                'slug' => 'event-planning-services',
                'name' => 'Event Planning Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Event Planning Services',
                    'de' => 'Eventplanungs-Dienstleistungen',
                    'es' => 'Servicios de Planificación de Eventos',
                    'pl' => 'Usługi Planowania Wydarzeń'
                ]),
                'scom' => 'Professional event planning and management services',
                'scom_translations' => json_encode([
                    'en' => 'Professional event planning and management services',
                    'de' => 'Professionelle Eventplanung und Management-Dienstleistungen',
                    'es' => 'Servicios profesionales de planificación y gestión de eventos',
                    'pl' => 'Profesjonalne usługi planowania i zarządzania wydarzeniami'
                ])
            ],
            [
                'id' => 159,
                'parent_id' => 13,
                'slug' => 'other-networking-events',
                'name' => 'Other Networking & Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Networking & Events',
                    'de' => 'Andere Networking- und Event-Dienstleistungen',
                    'es' => 'Otros Servicios de Networking y Eventos',
                    'pl' => 'Inne Usługi Networkingowe i Wydarzeń'
                ]),
                'scom' => 'Other networking and events services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other networking and events services not covered in specific categories',
                    'de' => 'Andere Networking- und Event-Dienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios de networking y eventos no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi networkingowe i wydarzeń nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 160,
                'parent_id' => 14,
                'slug' => 'international-expansion-consulting',
                'name' => 'International Expansion Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Expansion Consulting',
                    'de' => 'Internationale Expansionsberatung',
                    'es' => 'Consultoría de Expansión Internacional',
                    'pl' => 'Doradztwo w Ekspansji Międzynarodowej'
                ]),
                'scom' => 'Strategic consulting for international business expansion and market entry',
                'scom_translations' => json_encode([
                    'en' => 'Strategic consulting for international business expansion and market entry',
                    'de' => 'Strategische Beratung für internationale Geschäftsexpansion und Markteintritt',
                    'es' => 'Consultoría estratégica para expansión internacional de negocios y entrada al mercado',
                    'pl' => 'Strategiczne doradztwo w zakresie międzynarodowej ekspansji biznesowej i wejścia na rynek'
                ])
            ],
            [
                'id' => 161,
                'parent_id' => 14,
                'slug' => 'translation-services',
                'name' => 'Translation Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Translation Services',
                    'de' => 'Übersetzungsdienstleistungen',
                    'es' => 'Servicios de Traducción',
                    'pl' => 'Usługi Tłumaczeniowe'
                ]),
                'scom' => 'Professional translation and localization services for global markets',
                'scom_translations' => json_encode([
                    'en' => 'Professional translation and localization services for global markets',
                    'de' => 'Professionelle Übersetzungs- und Lokalisierungsdienstleistungen für globale Märkte',
                    'es' => 'Servicios profesionales de traducción y localización para mercados globales',
                    'pl' => 'Profesjonalne usługi tłumaczeniowe i lokalizacyjne dla rynków globalnych'
                ])
            ],
            [
                'id' => 162,
                'parent_id' => 14,
                'slug' => 'cultural-consulting',
                'name' => 'Cultural Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cultural Consulting',
                    'de' => 'Kulturberatung',
                    'es' => 'Consultoría Cultural',
                    'pl' => 'Doradztwo Kulturowe'
                ]),
                'scom' => 'Cultural consulting and cross-cultural business advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Cultural consulting and cross-cultural business advisory services',
                    'de' => 'Kulturberatung und interkulturelle Geschäftsberatungsdienstleistungen',
                    'es' => 'Servicios de consultoría cultural y asesoría empresarial intercultural',
                    'pl' => 'Usługi doradztwa kulturowego i międzykulturowego doradztwa biznesowego'
                ])
            ],
            [
                'id' => 163,
                'parent_id' => 14,
                'slug' => 'international-marketing',
                'name' => 'International Marketing',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Marketing',
                    'de' => 'Internationales Marketing',
                    'es' => 'Marketing Internacional',
                    'pl' => 'Marketing Międzynarodowy'
                ]),
                'scom' => 'International marketing strategies and global market penetration services',
                'scom_translations' => json_encode([
                    'en' => 'International marketing strategies and global market penetration services',
                    'de' => 'Internationale Marketingstrategien und globale Marktdurchdringungsdienstleistungen',
                    'es' => 'Estrategias de marketing internacional y servicios de penetración de mercados globales',
                    'pl' => 'Strategie marketingu międzynarodowego i usługi penetracji rynków globalnych'
                ])
            ],
            [
                'id' => 164,
                'parent_id' => 14,
                'slug' => 'cross-border-payment-solutions',
                'name' => 'Cross-border Payment Solutions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cross-border Payment Solutions',
                    'de' => 'Grenzüberschreitende Zahlungslösungen',
                    'es' => 'Soluciones de Pago Transfronterizo',
                    'pl' => 'Rozwiązania Płatności Transgranicznych'
                ]),
                'scom' => 'Cross-border payment processing and international transaction services',
                'scom_translations' => json_encode([
                    'en' => 'Cross-border payment processing and international transaction services',
                    'de' => 'Grenzüberschreitende Zahlungsabwicklung und internationale Transaktionsdienstleistungen',
                    'es' => 'Procesamiento de pagos transfronterizos y servicios de transacciones internacionales',
                    'pl' => 'Przetwarzanie płatności transgranicznych i usługi transakcji międzynarodowych'
                ])
            ],
            [
                'id' => 165,
                'parent_id' => 14,
                'slug' => 'international-legal-services',
                'name' => 'International Legal Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Legal Services',
                    'de' => 'Internationale Rechtsdienstleistungen',
                    'es' => 'Servicios Legales Internacionales',
                    'pl' => 'Międzynarodowe Usługi Prawne'
                ]),
                'scom' => 'International legal services and cross-border legal compliance',
                'scom_translations' => json_encode([
                    'en' => 'International legal services and cross-border legal compliance',
                    'de' => 'Internationale Rechtsdienstleistungen und grenzüberschreitende Rechts-Compliance',
                    'es' => 'Servicios legales internacionales y cumplimiento legal transfronterizo',
                    'pl' => 'Międzynarodowe usługi prawne i zgodność prawna transgraniczna'
                ])
            ],
            [
                'id' => 166,
                'parent_id' => 14,
                'slug' => 'export-import-consulting',
                'name' => 'Export/Import Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Export/Import Consulting',
                    'de' => 'Export/Import-Beratung',
                    'es' => 'Consultoría de Exportación/Importación',
                    'pl' => 'Doradztwo Eksportowo-Importowe'
                ]),
                'scom' => 'Export and import consulting services for international trade',
                'scom_translations' => json_encode([
                    'en' => 'Export and import consulting services for international trade',
                    'de' => 'Export- und Import-Beratungsdienstleistungen für internationalen Handel',
                    'es' => 'Servicios de consultoría de exportación e importación para comercio internacional',
                    'pl' => 'Usługi doradztwa eksportowo-importowego dla handlu międzynarodowego'
                ])
            ],
            [
                'id' => 167,
                'parent_id' => 14,
                'slug' => 'foreign-market-entry',
                'name' => 'Foreign Market Entry',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Foreign Market Entry',
                    'de' => 'Ausländischer Markteintritt',
                    'es' => 'Entrada a Mercados Extranjeros',
                    'pl' => 'Wejście na Rynki Zagraniczne'
                ]),
                'scom' => 'Foreign market entry strategies and international market development',
                'scom_translations' => json_encode([
                    'en' => 'Foreign market entry strategies and international market development',
                    'de' => 'Ausländische Markteintrittsstrategien und internationale Marktentwicklung',
                    'es' => 'Estrategias de entrada a mercados extranjeros y desarrollo de mercados internacionales',
                    'pl' => 'Strategie wejścia na rynki zagraniczne i rozwój rynków międzynarodowych'
                ])
            ],
            [
                'id' => 168,
                'parent_id' => 14,
                'slug' => 'international-tax-services',
                'name' => 'International Tax Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Tax Services',
                    'de' => 'Internationale Steuerdienstleistungen',
                    'es' => 'Servicios Fiscales Internacionales',
                    'pl' => 'Międzynarodowe Usługi Podatkowe'
                ]),
                'scom' => 'International tax planning and cross-border tax compliance services',
                'scom_translations' => json_encode([
                    'en' => 'International tax planning and cross-border tax compliance services',
                    'de' => 'Internationale Steuerplanung und grenzüberschreitende Steuer-Compliance-Dienstleistungen',
                    'es' => 'Servicios de planificación fiscal internacional y cumplimiento fiscal transfronterizo',
                    'pl' => 'Usługi międzynarodowego planowania podatkowego i zgodności podatkowej transgranicznej'
                ])
            ],
            [
                'id' => 169,
                'parent_id' => 14,
                'slug' => 'global-compliance-services',
                'name' => 'Global Compliance Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Global Compliance Services',
                    'de' => 'Globale Compliance-Dienstleistungen',
                    'es' => 'Servicios de Cumplimiento Global',
                    'pl' => 'Usługi Globalnej Zgodności'
                ]),
                'scom' => 'Global regulatory compliance and international standards advisory',
                'scom_translations' => json_encode([
                    'en' => 'Global regulatory compliance and international standards advisory',
                    'de' => 'Globale regulatorische Compliance und internationale Standards-Beratung',
                    'es' => 'Cumplimiento regulatorio global y asesoría de estándares internacionales',
                    'pl' => 'Globalna zgodność regulacyjna i doradztwo w zakresie standardów międzynarodowych'
                ])
            ],
            [
                'id' => 170,
                'parent_id' => 14,
                'slug' => 'other-international-services',
                'name' => 'Other International Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other International Services',
                    'de' => 'Andere internationale Dienstleistungen',
                    'es' => 'Otros Servicios Internacionales',
                    'pl' => 'Inne Usługi Międzynarodowe'
                ]),
                'scom' => 'Other international services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other international services not covered in specific categories',
                    'de' => 'Andere internationale Dienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios internacionales no cubiertos en categorías específicas',
                    'pl' => 'Inne usługi międzynarodowe nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 171,
                'parent_id' => 15,
                'slug' => 'regulatory-consulting',
                'name' => 'Regulatory Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Regulatory Consulting',
                    'de' => 'Regulatorische Beratung',
                    'es' => 'Consultoría Regulatoria',
                    'pl' => 'Doradztwo Regulacyjne'
                ]),
                'scom' => 'Industry-specific regulatory consulting and compliance advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Industry-specific regulatory consulting and compliance advisory services',
                    'de' => 'Branchenspezifische regulatorische Beratung und Compliance-Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría regulatoria específica de la industria y asesoría de cumplimiento',
                    'pl' => 'Branżowe doradztwo regulacyjne i usługi doradcze w zakresie zgodności'
                ])
            ],
            [
                'id' => 172,
                'parent_id' => 15,
                'slug' => 'government-relations',
                'name' => 'Government Relations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Government Relations',
                    'de' => 'Regierungsbeziehungen',
                    'es' => 'Relaciones Gubernamentales',
                    'pl' => 'Relacje Rządowe'
                ]),
                'scom' => 'Government relations and public affairs consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Government relations and public affairs consulting services',
                    'de' => 'Regierungsbeziehungen und Public Affairs Beratungsdienstleistungen',
                    'es' => 'Servicios de consultoría en relaciones gubernamentales y asuntos públicos',
                    'pl' => 'Usługi doradcze w zakresie relacji rządowych i spraw publicznych'
                ])
            ],
            [
                'id' => 173,
                'parent_id' => 15,
                'slug' => 'grant-writing-services',
                'name' => 'Grant Writing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Grant Writing Services',
                    'de' => 'Grant Writing Dienstleistungen',
                    'es' => 'Servicios de Redacción de Subvenciones',
                    'pl' => 'Usługi Pisania Wniosków o Granty'
                ]),
                'scom' => 'Professional grant writing and funding application services',
                'scom_translations' => json_encode([
                    'en' => 'Professional grant writing and funding application services',
                    'de' => 'Professionelle Grant Writing und Finanzierungsantragsdienstleistungen',
                    'es' => 'Servicios profesionales de redacción de subvenciones y solicitudes de financiamiento',
                    'pl' => 'Profesjonalne usługi pisania wniosków o granty i aplikacji o finansowanie'
                ])
            ],
            [
                'id' => 174,
                'parent_id' => 15,
                'slug' => 'rd-consulting',
                'name' => 'R&D Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'R&D Consulting',
                    'de' => 'F&E-Beratung',
                    'es' => 'Consultoría de I+D',
                    'pl' => 'Doradztwo B+R'
                ]),
                'scom' => 'Research and development consulting and innovation advisory services',
                'scom_translations' => json_encode([
                    'en' => 'Research and development consulting and innovation advisory services',
                    'de' => 'Forschungs- und Entwicklungsberatung und Innovationsberatungsdienstleistungen',
                    'es' => 'Servicios de consultoría en investigación y desarrollo y asesoría en innovación',
                    'pl' => 'Usługi doradztwa w zakresie badań i rozwoju oraz doradztwa innowacyjnego'
                ])
            ],
            [
                'id' => 175,
                'parent_id' => 15,
                'slug' => 'clinical-trial-services',
                'name' => 'Clinical Trial Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Clinical Trial Services',
                    'de' => 'Klinische Studien-Dienstleistungen',
                    'es' => 'Servicios de Ensayos Clínicos',
                    'pl' => 'Usługi Badań Klinicznych'
                ]),
                'scom' => 'Clinical trial management and regulatory affairs for healthcare startups',
                'scom_translations' => json_encode([
                    'en' => 'Clinical trial management and regulatory affairs for healthcare startups',
                    'de' => 'Klinische Studienmanagement und regulatorische Angelegenheiten für Healthcare-Startups',
                    'es' => 'Gestión de ensayos clínicos y asuntos regulatorios para startups de salud',
                    'pl' => 'Zarządzanie badaniami klinicznymi i sprawy regulacyjne dla startupów zdrowotnych'
                ])
            ],
            [
                'id' => 176,
                'parent_id' => 15,
                'slug' => 'manufacturing-services',
                'name' => 'Manufacturing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Manufacturing Services',
                    'de' => 'Fertigungsdienstleistungen',
                    'es' => 'Servicios de Manufactura',
                    'pl' => 'Usługi Produkcyjne'
                ]),
                'scom' => 'Contract manufacturing and production services for product-based startups',
                'scom_translations' => json_encode([
                    'en' => 'Contract manufacturing and production services for product-based startups',
                    'de' => 'Auftragsfertigung und Produktionsdienstleistungen für produktbasierte Startups',
                    'es' => 'Servicios de manufactura por contrato y producción para startups basados en productos',
                    'pl' => 'Usługi produkcji kontraktowej i wytwarzania dla startupów produktowych'
                ])
            ],
            [
                'id' => 177,
                'parent_id' => 15,
                'slug' => 'distribution-partners',
                'name' => 'Distribution Partners',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Distribution Partners',
                    'de' => 'Vertriebspartner',
                    'es' => 'Socios de Distribución',
                    'pl' => 'Partnerzy Dystrybucyjni'
                ]),
                'scom' => 'Distribution partnerships and channel partner networks',
                'scom_translations' => json_encode([
                    'en' => 'Distribution partnerships and channel partner networks',
                    'de' => 'Vertriebspartnerschaften und Kanalpartner-Netzwerke',
                    'es' => 'Asociaciones de distribución y redes de socios de canal',
                    'pl' => 'Partnerstwa dystrybucyjne i sieci partnerów kanałowych'
                ])
            ],
            [
                'id' => 178,
                'parent_id' => 15,
                'slug' => 'licensing-services',
                'name' => 'Licensing Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Licensing Services',
                    'de' => 'Lizenzierungs-Dienstleistungen',
                    'es' => 'Servicios de Licencias',
                    'pl' => 'Usługi Licencyjne'
                ]),
                'scom' => 'Technology licensing and intellectual property licensing services',
                'scom_translations' => json_encode([
                    'en' => 'Technology licensing and intellectual property licensing services',
                    'de' => 'Technologie-Lizenzierung und geistiges Eigentum Lizenzierungsdienstleistungen',
                    'es' => 'Servicios de licencias de tecnología y licencias de propiedad intelectual',
                    'pl' => 'Usługi licencjonowania technologii i własności intelektualnej'
                ])
            ],
            [
                'id' => 179,
                'parent_id' => 15,
                'slug' => 'joint-venture-facilitation',
                'name' => 'Joint Venture Facilitation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Joint Venture Facilitation',
                    'de' => 'Joint Venture Facilitation',
                    'es' => 'Facilitación de Joint Ventures',
                    'pl' => 'Ułatwianie Joint Venture'
                ]),
                'scom' => 'Joint venture facilitation and strategic partnership development',
                'scom_translations' => json_encode([
                    'en' => 'Joint venture facilitation and strategic partnership development',
                    'de' => 'Joint Venture Facilitation und strategische Partnerschaftsentwicklung',
                    'es' => 'Facilitación de joint ventures y desarrollo de asociaciones estratégicas',
                    'pl' => 'Ułatwianie joint venture i rozwój partnerstw strategicznych'
                ])
            ],
            [
                'id' => 180,
                'parent_id' => 15,
                'slug' => 'exit-strategy-consulting',
                'name' => 'Exit Strategy Consulting',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Exit Strategy Consulting',
                    'de' => 'Exit-Strategie-Beratung',
                    'es' => 'Consultoría de Estrategia de Salida',
                    'pl' => 'Doradztwo w Strategii Wyjścia'
                ]),
                'scom' => 'Exit strategy planning and business succession consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Exit strategy planning and business succession consulting services',
                    'de' => 'Exit-Strategie-Planung und Unternehmensnachfolge-Beratungsdienstleistungen',
                    'es' => 'Servicios de planificación de estrategia de salida y consultoría de sucesión empresarial',
                    'pl' => 'Usługi planowania strategii wyjścia i doradztwa w zakresie sukcesji biznesowej'
                ])
            ],
            [
                'id' => 181,
                'parent_id' => 15,
                'slug' => 'other-specialized-industry-services',
                'name' => 'Other Specialized Industry Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Specialized Industry Services',
                    'de' => 'Andere spezialisierte Branchen-Dienstleistungen',
                    'es' => 'Otros Servicios Especializados por Industria',
                    'pl' => 'Inne Specjalistyczne Usługi Branżowe'
                ]),
                'scom' => 'Other specialized industry services not covered in specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other specialized industry services not covered in specific categories',
                    'de' => 'Andere spezialisierte Branchen-Dienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios especializados por industria no cubiertos en categorías específicas',
                    'pl' => 'Inne specjalistyczne usługi branżowe nie objęte określonymi kategoriami'
                ])
            ],
            [
                'id' => 182,
                'parent_id' => 16,
                'slug' => 'business-insurance',
                'name' => 'Business Insurance',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Insurance',
                    'de' => 'Unternehmensversicherung',
                    'es' => 'Seguro Empresarial',
                    'pl' => 'Ubezpieczenia Biznesowe'
                ]),
                'scom' => 'Comprehensive business insurance and risk coverage services',
                'scom_translations' => json_encode([
                    'en' => 'Comprehensive business insurance and risk coverage services',
                    'de' => 'Umfassende Unternehmensversicherung und Risikoabdeckungsdienstleistungen',
                    'es' => 'Servicios integrales de seguro empresarial y cobertura de riesgos',
                    'pl' => 'Kompleksowe usługi ubezpieczeń biznesowych i pokrycia ryzyka'
                ])
            ],
            [
                'id' => 183,
                'parent_id' => 16,
                'slug' => 'risk-management',
                'name' => 'Risk Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Risk Management',
                    'de' => 'Risikomanagement',
                    'es' => 'Gestión de Riesgos',
                    'pl' => 'Zarządzanie Ryzykiem'
                ]),
                'scom' => 'Business risk assessment and risk management consulting services',
                'scom_translations' => json_encode([
                    'en' => 'Business risk assessment and risk management consulting services',
                    'de' => 'Geschäftsrisikobewertung und Risikomanagement-Beratungsdienstleistungen',
                    'es' => 'Servicios de evaluación de riesgos empresariales y consultoría en gestión de riesgos',
                    'pl' => 'Usługi oceny ryzyka biznesowego i doradztwa w zarządzaniu ryzykiem'
                ])
            ],
            [
                'id' => 184,
                'parent_id' => 16,
                'slug' => 'crisis-management',
                'name' => 'Crisis Management',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Crisis Management',
                    'de' => 'Krisenmanagement',
                    'es' => 'Gestión de Crisis',
                    'pl' => 'Zarządzanie Kryzysem'
                ]),
                'scom' => 'Crisis management and business continuity planning services',
                'scom_translations' => json_encode([
                    'en' => 'Crisis management and business continuity planning services',
                    'de' => 'Krisenmanagement und Business Continuity Planungsdienstleistungen',
                    'es' => 'Servicios de gestión de crisis y planificación de continuidad empresarial',
                    'pl' => 'Usługi zarządzania kryzysem i planowania ciągłości biznesowej'
                ])
            ],
            [
                'id' => 185,
                'parent_id' => 16,
                'slug' => 'public-affairs',
                'name' => 'Public Affairs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Public Affairs',
                    'de' => 'Public Affairs',
                    'es' => 'Asuntos Públicos',
                    'pl' => 'Sprawy Publiczne'
                ]),
                'scom' => 'Public affairs and stakeholder relations management services',
                'scom_translations' => json_encode([
                    'en' => 'Public affairs and stakeholder relations management services',
                    'de' => 'Public Affairs und Stakeholder Relations Management-Dienstleistungen',
                    'es' => 'Servicios de asuntos públicos y gestión de relaciones con partes interesadas',
                    'pl' => 'Usługi spraw publicznych i zarządzania relacjami z interesariuszami'
                ])
            ],
            [
                'id' => 186,
                'parent_id' => 16,
                'slug' => 'investor-relations',
                'name' => 'Investor Relations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investor Relations',
                    'de' => 'Investor Relations',
                    'es' => 'Relaciones con Inversores',
                    'pl' => 'Relacje Inwestorskie'
                ]),
                'scom' => 'Investor relations and shareholder communication services',
                'scom_translations' => json_encode([
                    'en' => 'Investor relations and shareholder communication services',
                    'de' => 'Investor Relations und Aktionärskommunikationsdienstleistungen',
                    'es' => 'Servicios de relaciones con inversores y comunicación con accionistas',
                    'pl' => 'Usługi relacji inwestorskich i komunikacji z akcjonariuszami'
                ])
            ],
            [
                'id' => 187,
                'parent_id' => 16,
                'slug' => 'board-advisory-services',
                'name' => 'Board Advisory Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Board Advisory Services',
                    'de' => 'Vorstandsberatungsdienstleistungen',
                    'es' => 'Servicios de Asesoría de Junta Directiva',
                    'pl' => 'Usługi Doradcze Zarządu'
                ]),
                'scom' => 'Board of directors advisory and corporate governance services',
                'scom_translations' => json_encode([
                    'en' => 'Board of directors advisory and corporate governance services',
                    'de' => 'Vorstandsberatung und Corporate Governance Dienstleistungen',
                    'es' => 'Servicios de asesoría de junta directiva y gobierno corporativo',
                    'pl' => 'Usługi doradcze zarządu i ładu korporacyjnego'
                ])
            ],
            [
                'id' => 188,
                'parent_id' => 16,
                'slug' => 'interim-executive-services',
                'name' => 'Interim Executive Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Interim Executive Services',
                    'de' => 'Interim Executive Services',
                    'es' => 'Servicios de Ejecutivos Interinos',
                    'pl' => 'Usługi Tymczasowych Kadry Kierowniczej'
                ]),
                'scom' => 'Interim executive placement and temporary leadership services',
                'scom_translations' => json_encode([
                    'en' => 'Interim executive placement and temporary leadership services',
                    'de' => 'Interim Executive Placement und temporäre Führungsdienstleistungen',
                    'es' => 'Servicios de colocación de ejecutivos interinos y liderazgo temporal',
                    'pl' => 'Usługi tymczasowego umieszczania kadry kierowniczej i tymczasowego przywództwa'
                ])
            ],
            [
                'id' => 189,
                'parent_id' => 16,
                'slug' => 'business-valuation',
                'name' => 'Business Valuation',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Valuation',
                    'de' => 'Unternehmensbewertung',
                    'es' => 'Valoración de Empresas',
                    'pl' => 'Wycena Przedsiębiorstw'
                ]),
                'scom' => 'Professional business valuation and appraisal services',
                'scom_translations' => json_encode([
                    'en' => 'Professional business valuation and appraisal services',
                    'de' => 'Professionelle Unternehmensbewertung und Schätzungsdienstleistungen',
                    'es' => 'Servicios profesionales de valoración y tasación empresarial',
                    'pl' => 'Profesjonalne usługi wyceny i szacowania przedsiębiorstw'
                ])
            ],
            [
                'id' => 190,
                'parent_id' => 16,
                'slug' => 'due-diligence-services',
                'name' => 'Due Diligence Services',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Due Diligence Services',
                    'de' => 'Due Diligence Dienstleistungen',
                    'es' => 'Servicios de Due Diligence',
                    'pl' => 'Usługi Due Diligence'
                ]),
                'scom' => 'Due diligence investigation and business assessment services',
                'scom_translations' => json_encode([
                    'en' => 'Due diligence investigation and business assessment services',
                    'de' => 'Due Diligence Untersuchung und Geschäftsbewertungsdienstleistungen',
                    'es' => 'Servicios de investigación de due diligence y evaluación empresarial',
                    'pl' => 'Usługi badania due diligence i oceny biznesowej'
                ])
            ],
            [
                'id' => 191,
                'parent_id' => 16,
                'slug' => 'merger-acquisition-advisory',
                'name' => 'Merger & Acquisition Advisory',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Merger & Acquisition Advisory',
                    'de' => 'Merger & Acquisition Beratung',
                    'es' => 'Asesoría en Fusiones y Adquisiciones',
                    'pl' => 'Doradztwo w Fuzjach i Przejęciach'
                ]),
                'scom' => 'Merger and acquisition advisory and transaction services',
                'scom_translations' => json_encode([
                    'en' => 'Merger and acquisition advisory and transaction services',
                    'de' => 'Merger und Acquisition Beratung und Transaktionsdienstleistungen',
                    'es' => 'Servicios de asesoría y transacciones en fusiones y adquisiciones',
                    'pl' => 'Usługi doradcze i transakcyjne w zakresie fuzji i przejęć'
                ])
            ],
            [
                'id' => 192,
                'parent_id' => 16,
                'slug' => 'other-professional-services',
                'name' => 'Other Professional Services',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Professional Services',
                    'de' => 'Andere Professionelle Dienstleistungen',
                    'es' => 'Otros Servicios Profesionales',
                    'pl' => 'Inne Usługi Profesjonalne'
                ]),
                'scom' => 'Other professional services not covered in any specific categories',
                'scom_translations' => json_encode([
                    'en' => 'Other professional services not covered in any specific categories',
                    'de' => 'Andere professionelle Dienstleistungen, die nicht in spezifischen Kategorien abgedeckt sind',
                    'es' => 'Otros servicios profesionales no cubiertos en ninguna categoría específica',
                    'pl' => 'Inne usługi profesjonalne nie objęte żadnymi określonymi kategoriami'
                ])
            ]
        ];
        // Disable foreign key checks temporarily
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table
        DB::table('service_categories')->truncate();
        // Re-enable foreign key checks
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Insert categories
        foreach ($categories as $category) {
            DB::table('service_categories')->insert([
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
