@php
    $lang = App::getLocale();
@endphp

<x-app-layout>
    <div id="privacy-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="mx-auto px-5 container">
            <x-header-page title="{{ __('RGPD Privacy Policy') }}" />


            @if($lang === 'fr')
                <div class="content">
                    <p class="text-md text-white">
                        1. Introduction
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan prend au sérieux la protection de vos données personnelles et s’engage à garantir le respect de votre vie privée lors de l'utilisation de notre site web. Cette politique de confidentialité est destinée à vous informer de nos pratiques concernant la collecte, l’utilisation et le partage des informations que vous pourriez fournir via notre site web.
                    </p>
                    <p class="text-md text-white mt-4">
                        2. Collecte des données personnelles
                    </p>
                    <p class="text-md text-white mt-4">
                        Les informations personnelles pouvant être collectées par OmniScan incluent :
                    </p>
                    <p class="text-md text-white mt-4">
                        Données d'identification et de contact : nom, prénom, adresse email, numéro de téléphone.
                    </p>
                    <p class="text-md text-white mt-4">
                        Données de connexion et d’utilisation : adresses IP, logs de connexion, historiques de navigation, préférences et intérêts.
                    </p>
                    <p class="text-md text-white mt-4">
                        Données relatives à vos interactions : participation à des promotions, saisie de formulaires.
                    </p>
                    <p class="text-md text-white mt-4">
                        Ces informations sont collectées lorsque vous utilisez notre site pour vous inscrire à nos services, participer à une enquête, vous inscrire à une newsletter, ou communiquer avec notre support.
                    </p>
                    <p class="text-md text-white mt-4">
                        3. Utilisation des données
                    </p>
                    <p class="text-md text-white mt-4">
                        Les données collectées par OmniScan sont utilisées pour :
                    </p>
                    <p class="text-md text-white mt-4">
                        Fournir et gérer les services demandés.
                    </p>
                    <p class="text-md text-white mt-4">
                        Améliorer et personnaliser nos services.
                    </p>
                    <p class="text-md text-white mt-4">
                        Communiquer avec vous concernant nos services ou questions.
                    </p>
                    <p class="text-md text-white mt-4">
                        Conduire des analyses statistiques pour améliorer le site.
                    </p>
                    <p class="text-md text-white mt-4">
                        Assurer la sécurité du site et la protection contre les fraudes.
                    </p>
                    <p class="text-md text-white mt-4">
                        4. Base légale du traitement
                    </p>
                    <p class="text-md text-white mt-4">
                        Le traitement de vos données personnelles est basé sur :
                    </p>
                    <p class="text-md text-white mt-4">
                        Votre consentement explicite pour les traitements spécifiques.
                    </p>
                    <p class="text-md text-white mt-4">
                        La nécessité de traiter vos informations pour la fourniture de nos services contractuels.
                    </p>
                    <p class="text-md text-white mt-4">
                        Les intérêts légitimes d’OmniScan, tant que ceux-ci ne se heurtent pas à vos droits et libertés.
                    </p>
                    <p class="text-md text-white mt-4">
                        5. Partage des données personnelles
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan ne vend, ne loue ni n’échange vos données personnelles avec des tiers. Les données peuvent être divulguées à des sous-traitants ou partenaires qui contribuent à la fourniture de nos services (par exemple, hébergement web). Ces partenaires sont soumis à des obligations strictes de confidentialité et de sécurité.
                    </p>
                    <p class="text-md text-white mt-4">
                        6. Transferts de données hors UE
                    </p>
                    <p class="text-md text-white mt-4">
                        Si les données sont transférées hors de l'Union européenne, OmniScan prend les mesures nécessaires pour garantir que ce transfert soit effectué en conformité avec la réglementation applicable et assure un niveau de protection adéquat.
                    </p>
                    <p class="text-md text-white mt-4">
                        7. Sécurité des données
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan met en œuvre des mesures techniques et organisationnelles avancées pour protéger vos données personnelles contre l’altération, la perte accidentelle ou illégale, l’utilisation ou l’accès non autorisé.
                    </p>
                    <p class="text-md text-white mt-4">
                        8. Conservation des données
                    </p>
                    <p class="text-md text-white mt-4">
                        Les données collectées sont conservées pour une durée n’excédant pas la nécessité liée aux finalités pour lesquelles elles sont traitées, conformément à nos politiques de conservation.
                    </p>
                    <p class="text-md text-white mt-4">
                        9. Vos droits
                    </p>
                    <p class="text-md text-white mt-4">
                        Conformément au RGPD, vous disposez des droits suivants concernant vos données personnelles :
                    </p>
                    <p class="text-md text-white mt-4">
                        Droit d’accès, de rectification et de suppression.
                    </p>
                    <p class="text-md text-white mt-4">
                        Droit à la limitation du traitement.
                    </p>
                    <p class="text-md text-white mt-4">
                        Droit à la portabilité des données.
                    </p>
                    <p class="text-md text-white mt-4">
                        Droit d’opposition.
                    </p>
                    <p class="text-md text-white mt-4">
                        Droit de retirer votre consentement à tout moment.
                    </p>
                    <p class="text-md text-white mt-4">
                        Pour exercer ces droits, veuillez contacter OmniScan par email à omniscan@gmail.com ou par courrier au 2 rue Le Corbusier, Aix-en-Provence, France.
                    </p>
                    <p class="text-md text-white mt-4">
                        10. Modifications de cette politique
                    </p>
                    <p class="text-md text-white mt-4">
                        Cette politique peut être mise à jour à tout moment. Nous vous encourageons à la consulter régulièrement pour rester informé de tout changement.
                    </p>
                    <p class="text-md text-white mt-4">
                        11. Contact
                    </p>
                    <p class="text-md text-white mt-4">
                        Pour toute question ou préoccupation relative à cette politique de confidentialité, veuillez nous contacter à l'adresse ci-dessus.
                    </p>
                </div>
            @elseif($lang === 'en')
                <div class="content">
                    <p class="text-md text-white">
                        1. Introduction
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan takes the protection of your personal data seriously and is committed to ensuring the privacy of your personal information when using our website. This privacy policy is intended to inform you about our practices regarding the collection, use, and sharing of information you may provide through our website.
                    </p>
                    <p class="text-md text-white mt-4">
                        2. Collection of Personal Data
                    </p>
                    <p class="text-md text-white mt-4">
                        Personal information that may be collected by OmniScan includes:
                    </p>
                    <p class="text-md text-white mt-4">
                        Identification and contact data: name, first name, email address, phone number.
                    </p>
                    <p class="text-md text-white mt-4">
                        Connection and usage data: IP addresses, connection logs, browsing history, preferences, and interests.
                    </p>
                    <p class="text-md text-white mt-4">
                        Data related to your interactions: participation in promotions, form entries.
                    </p>
                    <p class="text-md text-white mt-4">
                        This information is collected when you use our site to register for our services, participate in a survey, subscribe to a newsletter, or communicate with our support.
                    </p>
                    <p class="text-md text-white mt-4">
                        3. Use of Data
                    </p>
                    <p class="text-md text-white mt-4">
                        The data collected by OmniScan is used to:
                    </p>
                    <p class="text-md text-white mt-4">
                        Provide and manage the requested services.
                    </p>
                    <p class="text-md text-white mt-4">
                        Improve and personalize our services.
                    </p>
                    <p class="text-md text-white mt-4">
                        Communicate with you about our services or inquiries.
                    </p>
                    <p class="text-md text-white mt-4">
                        Conduct statistical analyses to improve the site.
                    </p>
                    <p class="text-md text-white mt-4">
                        Ensure the security of the site and protection against fraud.
                    </p>
                    <p class="text-md text-white mt-4">
                        4. Legal Basis for Processing
                    </p>
                    <p class="text-md text-white mt-4">
                        The processing of your personal data is based on:
                    </p>
                    <p class="text-md text-white mt-4">
                        Your explicit consent for specific treatments.
                    </p>
                    <p class="text-md text-white mt-4">
                        The need to process your information for the provision of our contractual services.
                    </p>
                    <p class="text-md text-white mt-4">
                        The legitimate interests of OmniScan, as long as these do not conflict with your rights and freedoms.
                    </p>
                    <p class="text-md text-white mt-4">
                        5. Sharing of Personal Data
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan does not sell, rent, or trade your personal data with third parties. Data may be disclosed to subcontractors or partners who contribute to the provision of our services (e.g., web hosting). These partners are subject to strict confidentiality and security obligations.
                    </p>
                    <p class="text-md text-white mt-4">
                        6. Data Transfers Outside the EU
                    </p>
                    <p class="text-md text-white mt-4">
                        If data is transferred outside the European Union, OmniScan takes the necessary measures to ensure that this transfer is carried out in compliance with applicable regulations and ensures an adequate level of protection.
                    </p>
                    <p class="text-md text-white mt-4">
                        7. Data Security
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan implements advanced technical and organizational measures to protect your personal data against alteration, accidental or unlawful loss, use, or unauthorized access.
                    </p>
                    <p class="text-md text-white mt-4">
                        8. Data Retention
                    </p>
                    <p class="text-md text-white mt-4">
                        The collected data is retained for a duration not exceeding the necessity related to the purposes for which they are processed, in accordance with our retention policies.
                    </p>
                    <p class="text-md text-white mt-4">
                        9. Your Rights
                    </p>
                    <p class="text-md text-white mt-4">
                        In accordance with the GDPR, you have the following rights regarding your personal data:
                    </p>
                    <p class="text-md text-white mt-4">
                        Right of access, rectification, and erasure.
                    </p>
                    <p class="text-md text-white mt-4">
                        Right to restrict processing.
                    </p>
                    <p class="text-md text-white mt-4">
                        Right to data portability.
                    </p>
                    <p class="text-md text-white mt-4">
                        Right to object.
                    </p>
                    <p class="text-md text-white mt-4">
                        Right to withdraw your consent at any time.
                    </p>
                    <p class="text-md text-white mt-4">
                        To exercise these rights, please contact OmniScan by email at omniscan@gmail.com or by mail at 2 rue Le Corbusier, Aix-en-Provence, France.
                    </p>
                    <p class="text-md text-white mt-4">
                        10. Changes to This Policy
                    </p>
                    <p class="text-md text-white mt-4">
                        This policy may be updated at any time. We encourage you to review it regularly to stay informed of any changes.
                    </p>
                    <p class="text-md text-white mt-4">
                        11. Contact
                    </p>
                    <p class="text-md text-white mt-4">
                        For any questions or concerns regarding this privacy policy, please contact us at the above address.
                    </p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

