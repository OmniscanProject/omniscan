@php
    $lang = App::getLocale();
@endphp

<x-app-layout>
    <div id="privacy-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="mx-auto px-5 container">
            <x-header-page title="{{ __('Privacy Policy') }}" />


            @if($lang === 'fr')
                <div class="content">
                    <p class="text-md text-white">
                        Chez OmniScan, nous nous engageons à protéger et à respecter votre vie privée. La présente politique de confidentialité a pour but de vous informer sur la manière dont nous recueillons, utilisons, partageons et protégeons vos informations personnelles lorsque vous visitez notre site web ou utilisez nos services. En accédant à notre site web ou en utilisant nos services, vous acceptez les pratiques décrites dans cette politique.
                    </p>
                    <p class="text-md text-white mt-4">
                        1. Informations Collectées
                    </p>
                    <p class="text-md text-white mt-4">
                        1.1. Informations que Vous Nous Fournissez :
                    </p>
                    <p class="text-md text-white mt-4">
                        Données d’Identification : Nous pouvons recueillir des informations telles que votre nom, prénom, adresse email, numéro de téléphone, adresse postale et toute autre information que vous nous fournissez volontairement lors de votre inscription ou de l'utilisation de nos services.
                    </p>
                    <p class="text-md text-white mt-4">
                        Informations Financières : Si vous effectuez des achats ou des transactions financières via notre site, nous collecterons des informations nécessaires au traitement des paiements, telles que les numéros de carte de crédit ou autres informations de paiement.
                    </p>
                    <p class="text-md text-white mt-4">
                        Informations de Connexion : Pour accéder à certaines parties de notre site web, il peut vous être demandé de créer un compte, nécessitant un nom d’utilisateur et un mot de passe.
                    </p>
                    <p class="text-md text-white mt-4">
                        1.2. Informations Collectées Automatiquement :
                    </p>
                    <p class="text-md text-white mt-4">
                        Données de Navigation : Lorsque vous visitez notre site, nous recueillons automatiquement des informations telles que votre adresse IP, le type de navigateur, le fournisseur de services Internet (FSI), les pages de renvoi/sortie, le système d'exploitation, l'horodatage et les données de parcours de clics.
                    </p>
                    <p class="text-md text-white mt-4">
                        Cookies et Technologies Similaires : Nous utilisons des cookies, balises web et autres technologies similaires pour collecter des informations sur votre utilisation de notre site. Cela nous aide à améliorer nos services et à offrir une expérience utilisateur personnalisée.
                    </p>
                    <p class="text-md text-white mt-4">
                        2. Utilisation des Informations
                    </p>
                    <p class="text-md text-white mt-4">
                        Nous utilisons vos informations personnelles pour diverses finalités, notamment :
                    </p>
                    <p class="text-md text-white mt-4">
                        2.1. Fournir et Gérer nos Services :
                    </p>
                    <p class="text-md text-white mt-4">
                        Exécution des Contrats : Utiliser vos informations pour traiter vos commandes, gérer votre compte et fournir les services demandés.
                    </p>
                    <p class="text-md text-white mt-4">
                        Support Client : Répondre à vos demandes de support, résoudre les problèmes techniques et améliorer nos services.
                    </p>
                    <p class="text-md text-white mt-4">
                        2.2. Améliorer notre Site et nos Services :
                    </p>
                    <p class="text-md text-white mt-4">
                        Analyse et Recherche : Analyser les données de navigation pour comprendre comment notre site est utilisé, identifier les tendances et les préférences des utilisateurs afin d'améliorer nos offres.
                    </p>
                    <p class="text-md text-white mt-4">
                        Personnalisation : Personnaliser votre expérience utilisateur en vous proposant des contenus et des recommandations adaptés à vos intérêts.
                    </p>
                    <p class="text-md text-white mt-4">
                        2.3. Communication :
                    </p>
                    <p class="text-md text-white mt-4">
                        Marketing et Promotions : Vous envoyer des informations sur nos produits, services, offres spéciales et événements. Vous pouvez choisir de ne pas recevoir ces communications en suivant les instructions de désabonnement incluses dans chaque message.
                    </p>
                    <p class="text-md text-white mt-4">
                        Notifications Importantes : Vous informer des modifications apportées à nos services, de la mise à jour de cette politique de confidentialité, ou des problèmes de sécurité.
                    </p>
                    <p class="text-md text-white mt-4">
                        2.4. Sécurité :
                    </p>
                    <p class="text-md text-white mt-4">
                        Prévention de la Fraude : Utiliser les informations pour prévenir les activités frauduleuses, sécuriser nos systèmes et protéger vos données personnelles.
                    </p>
                    <p class="text-md text-white mt-4">
                        Respect des Obligations Légales : Conserver et divulguer vos informations personnelles conformément aux exigences légales et réglementaires.
                    </p>
                    <p class="text-md text-white mt-4">
                        3. Partage des Informations
                    </p>
                    <p class="text-md text-white mt-4">
                        Nous ne partageons vos informations personnelles qu'avec des tiers sous certaines conditions :
                    </p>
                    <p class="text-md text-white mt-4">
                        3.1. Avec votre Consentement :
                    </p>
                    <p class="text-md text-white mt-4">
                        Partage Volontaire : Lorsque vous nous donnez votre accord explicite pour partager vos informations avec des tiers.
                    </p>
                    <p class="text-md text-white mt-4">
                        3.2. Fournisseurs de Services :
                    </p>
                    <p class="text-md text-white mt-4">
                        Prestataires de Services : Nous pouvons partager vos informations avec des tiers fournisseurs de services qui exécutent des fonctions en notre nom, tels que le traitement des paiements, l'hébergement de site web, l'analyse de données, et le service client. Ces prestataires sont tenus de protéger vos informations et de les utiliser uniquement aux fins pour lesquelles elles ont été partagées.
                    </p>
                    <p class="text-md text-white mt-4">
                        3.3. Obligations Légales :
                    </p>
                    <p class="text-md text-white mt-4">
                        Conformité Légale : Nous pouvons divulguer vos informations pour nous conformer à une obligation légale, à une ordonnance judiciaire ou à une demande gouvernementale, ou pour protéger les droits, la propriété ou la sécurité d’OmniScan, de nos clients ou du public.
                    </p>
                    <p class="text-md text-white mt-4">
                        3.4. Transferts d'Entreprise :
                    </p>
                    <p class="text-md text-white mt-4">
                        Fusions et Acquisitions : En cas de fusion, acquisition, vente de tout ou partie de nos actifs, vos informations personnelles peuvent être transférées à l'entité acquéreuse.
                    </p>
                    <p class="text-md text-white mt-4">
                        4. Protection des Informations
                    </p>
                    <p class="text-md text-white mt-4">
                        Nous mettons en œuvre une série de mesures de sécurité techniques, administratives et physiques pour protéger vos informations personnelles contre l'accès non autorisé, la divulgation, l'altération ou la destruction :
                    </p>
                    <p class="text-md text-white mt-4">
                        Chiffrement : Utilisation du chiffrement SSL pour sécuriser les transactions en ligne et les informations sensibles.
                    </p>
                    <p class="text-md text-white mt-4">
                        Contrôles d’Accès : Limitation de l'accès aux informations personnelles aux seuls employés, agents et sous-traitants qui ont besoin de ces informations pour exercer leurs fonctions.
                    </p>
                    <p class="text-md text-white mt-4">
                        Surveillance et Audit : Surveillance régulière de nos systèmes pour détecter et prévenir toute activité suspecte ou malveillante.
                    </p>
                    <p class="text-md text-white mt-4">
                        5. Vos Droits
                    </p>
                    <p class="text-md text-white mt-4">
                        Vous disposez de plusieurs droits concernant vos données personnelles, conformément aux lois applicables en matière de protection des données :
                    </p>
                    <p class="text-md text-white mt-4">
                        5.1. Droit d’Accès :
                    </p>
                    <p class="text-md text-white mt-4">
                        Accès à Vos Données : Vous avez le droit de demander l'accès aux informations personnelles que nous détenons à votre sujet.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.2. Droit de Rectification :
                    </p>
                    <p class="text-md text-white mt-4">
                        Correction des Données : Vous pouvez demander la correction de toute information personnelle inexacte ou incomplète.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.3. Droit de Suppression :
                    </p>
                    <p class="text-md text-white mt-4">
                        Effacement des Données : Vous pouvez demander la suppression de vos informations personnelles, sous réserve de certaines exceptions légales.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.4. Droit d’Opposition :
                    </p>
                    <p class="text-md text-white mt-4">
                        Opposition au Traitement : Vous avez le droit de vous opposer au traitement de vos informations personnelles dans certaines circonstances.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.5. Droit à la Portabilité des Données :
                    </p>
                    <p class="text-md text-white mt-4">
                        Transfert des Données : Vous pouvez demander à recevoir vos informations personnelles dans un format structuré, couramment utilisé et lisible par machine, et à ce que ces données soient transmises à un autre responsable de traitement, lorsque cela est techniquement possible.
                    </p>
                    <p class="text-md text-white mt-4">
                        Pour exercer vos droits, veuillez nous contacter en utilisant les coordonnées fournies dans la section "Contact" ci-dessous.
                    </p>
                    <p class="text-md text-white mt-4">
                        6. Conservation des Données
                    </p>
                    <p class="text-md text-white mt-4">
                        Nous conservons vos informations personnelles aussi longtemps que nécessaire pour remplir les finalités pour lesquelles elles ont été collectées, sauf si une période de conservation plus longue est requise ou permise par la loi. Les critères utilisés pour déterminer nos périodes de conservation incluent :
                    </p>
                    <p class="text-md text-white mt-4">
                        Durée de la Relation Client : La durée pendant laquelle vous utilisez nos services et avez un compte chez nous.
                    </p>
                    <p class="text-md text-white mt-4">
                        Obligations Légales et Réglementaires : Nos obligations légales et réglementaires de conservation des données.
                    </p>
                    <p class="text-md text-white mt-4">
                        7. Transferts Internationaux de Données
                    </p>
                    <p class="text-md text-white mt-4">
                        Vos informations personnelles peuvent être transférées et traitées dans des pays autres que celui dans lequel vous résidez. Ces pays peuvent avoir des lois sur la protection des données différentes de celles de votre pays. Cependant, nous prendrons les mesures appropriées pour garantir que vos informations personnelles restent protégées conformément à cette politique de confidentialité.
                    </p>
                    <p class="text-md text-white mt-4">
                        8. Modifications de la Politique de Confidentialité
                    </p>
                    <p class="text-md text-white mt-4">
                        Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toute modification sera publiée sur cette page et, le cas échéant, vous sera notifiée par email ou par un avis bien visible sur notre site web. Nous vous encourageons à consulter régulièrement cette page pour rester informé de toute mise à jour.
                    </p>
                    <p class="text-md text-white mt-4">
                        9. Contact
                    </p>
                    <p class="text-md text-white mt-4">
                        Pour toute question ou demande concernant cette politique de confidentialité, ou pour exercer vos droits en matière de protection des données, veuillez nous contacter à :
                    </p>
                    <p class="text-md text-white mt-4">
                        Adresse Email : contact@omniscan.com
                    </p>
                    <p class="text-md text-white mt-4">
                        Adresse Postale : OmniScan, 2 rue Le Corbusier, 13090, Aix-en-Provence, France
                    </p>
                    <p class="text-md text-white mt-4">
                        Date d'entrée en vigueur : 2 Juin 2024
                    </p>
                    <p class="text-md text-white mt-4">
                        Politique de Confidentialité d'OmniScan
                    </p>
                </div>
            @elseif($lang === 'en')
                <div class="content">
                    <p class="text-md text-white">
                        At OmniScan, we are committed to protecting and respecting your privacy. This privacy policy aims to inform you about how we collect, use, share, and protect your personal information when you visit our website or use our services. By accessing our website or using our services, you agree to the practices described in this policy.
                    </p>
                    <p class="text-md text-white mt-4">
                        1. Information Collected
                    </p>
                    <p class="text-md text-white mt-4">
                        1.1. Information You Provide Us:
                    </p>
                    <p class="text-md text-white mt-4">
                        Identification Data: We may collect information such as your first name, last name, email address, phone number, postal address, and any other information you voluntarily provide during registration or use of our services.
                    </p>
                    <p class="text-md text-white mt-4">
                        Financial Information: If you make purchases or financial transactions through our site, we will collect information necessary to process payments, such as credit card numbers or other payment information.
                    </p>
                    <p class="text-md text-white mt-4">
                        Login Information: To access certain parts of our website, you may be required to create an account, requiring a username and password.
                    </p>
                    <p class="text-md text-white mt-4">
                        1.2. Information Collected Automatically:
                    </p>
                    <p class="text-md text-white mt-4">
                        Navigation Data: When you visit our site, we automatically collect information such as your IP address, browser type, Internet Service Provider (ISP), referring/exit pages, operating system, timestamp, and clickstream data.
                    </p>
                    <p class="text-md text-white mt-4">
                        Cookies and Similar Technologies: We use cookies, web beacons, and other similar technologies to collect information about your use of our site. This helps us improve our services and provide a personalized user experience.
                    </p>
                    <p class="text-md text-white mt-4">
                        2. Use of Information
                    </p>
                    <p class="text-md text-white mt-4">
                        We use your personal information for various purposes, including:
                    </p>
                    <p class="text-md text-white mt-4">
                        2.1. Provide and Manage our Services:
                    </p>
                    <p class="text-md text-white mt-4">
                        Contract Execution: Use your information to process your orders, manage your account, and provide requested services.
                    </p>
                    <p class="text-md text-white mt-4">
                        Customer Support: Respond to your support requests, resolve technical issues, and improve our services.
                    </p>
                    <p class="text-md text-white mt-4">
                        2.2. Improve our Site and Services:
                    </p>
                    <p class="text-md text-white mt-4">
                        Analysis and Research: Analyze navigation data to understand how our site is used, identify user trends and preferences to enhance our offerings.
                    </p>
                    <p class="text-md text-white mt-4">
                        Personalization: Personalize your user experience by offering content and recommendations tailored to your interests.
                    </p>
                    <p class="text-md text-white mt-4">
                        2.3. Communication:
                    </p>
                    <p class="text-md text-white mt-4">
                        Marketing and Promotions: Send you information about our products, services, special offers, and events. You can choose not to receive these communications by following the unsubscribe instructions included in each message.
                    </p>
                    <p class="text-md text-white mt-4">
                        Important Notifications: Inform you of changes to our services, updates to this privacy policy, or security issues.
                    </p>
                    <p class="text-md text-white mt-4">
                        2.4. Security:
                    </p>
                    <p class="text-md text-white mt-4">
                        Fraud Prevention: Use information to prevent fraudulent activities, secure our systems, and protect your personal data.
                    </p>
                    <p class="text-md text-white mt-4">
                        Compliance with Legal Obligations: Retain and disclose your personal information in accordance with legal and regulatory requirements.
                    </p>
                    <p class="text-md text-white mt-4">
                        3. Sharing of Information
                    </p>
                    <p class="text-md text-white mt-4">
                        We only share your personal information with third parties under certain conditions:
                    </p>
                    <p class="text-md text-white mt-4">
                        3.1. With Your Consent:
                    </p>
                    <p class="text-md text-white mt-4">
                        Voluntary Sharing: When you give us explicit consent to share your information with third parties.
                    </p>
                    <p class="text-md text-white mt-4">
                        3.2. Service Providers:
                    </p>
                    <p class="text-md text-white mt-4">
                        Service Providers: We may share your information with third-party service providers who perform functions on our behalf, such as payment processing, website hosting, data analysis, and customer service. These providers are required to protect your information and use it only for the purposes for which it was shared.
                    </p>
                    <p class="text-md text-white mt-4">
                        3.3. Legal Obligations:
                    </p>
                    <p class="text-md text-white mt-4">
                        Legal Compliance: We may disclose your information to comply with a legal obligation, a court order, or a government request, or to protect the rights, property, or safety of OmniScan, our customers, or the public.
                    </p>
                    <p class="text-md text-white mt-4">
                        3.4. Business Transfers:
                    </p>
                    <p class="text-md text-white mt-4">
                        Mergers and Acquisitions: In the event of a merger, acquisition, or sale of all or part of our assets, your personal information may be transferred to the acquiring entity.
                    </p>
                    <p class="text-md text-white mt-4">
                        4. Protection of Information
                    </p>
                    <p class="text-md text-white mt-4">
                        We implement a series of technical, administrative, and physical security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction:
                    </p>
                    <p class="text-md text-white mt-4">
                        Encryption: Use of SSL encryption to secure online transactions and sensitive information.
                    </p>
                    <p class="text-md text-white mt-4">
                        Access Controls: Limit access to personal information to only those employees, agents, and subcontractors who need that information to perform their duties.
                    </p>
                    <p class="text-md text-white mt-4">
                        Monitoring and Auditing: Regular monitoring of our systems to detect and prevent any suspicious or malicious activity.
                    </p>
                    <p class="text-md text-white mt-4">
                        5. Your Rights
                    </p>
                    <p class="text-md text-white mt-4">
                        You have several rights regarding your personal data, in accordance with applicable data protection laws:
                    </p>
                    <p class="text-md text-white mt-4">
                        5.1. Right of Access:
                    </p>
                    <p class="text-md text-white mt-4">
                        Access to Your Data: You have the right to request access to the personal information we hold about you.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.2. Right to Rectification:
                    </p>
                    <p class="text-md text-white mt-4">
                        Correction of Data: You can request the correction of any inaccurate or incomplete personal information.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.3. Right to Erasure:
                    </p>
                    <p class="text-md text-white mt-4">
                        Erasure of Data: You can request the deletion of your personal information, subject to certain legal exceptions.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.4. Right to Object:
                    </p>
                    <p class="text-md text-white mt-4">
                        Objection to Processing: You have the right to object to the processing of your personal information in certain circumstances.
                    </p>
                    <p class="text-md text-white mt-4">
                        5.5. Right to Data Portability:
                    </p>
                    <p class="text-md text-white mt-4">
                        Data Transfer: You can request to receive your personal information in a structured, commonly used, and machine-readable format, and to have those data transferred to another data controller, where technically feasible.
                    </p>
                    <p class="text-md text-white mt-4">
                        To exercise your rights, please contact us using the contact details provided in the "Contact" section below.
                    </p>
                    <p class="text-md text-white mt-4">
                        6. Data Retention
                    </p>
                    <p class="text-md text-white mt-4">
                        We retain your personal information as long as necessary to fulfill the purposes for which it was collected, unless a longer retention period is required or permitted by law. The criteria used to determine our retention periods include:
                    </p>
                    <p class="text-md text-white mt-4">
                        Duration of the Customer Relationship: The duration during which you use our services and have an account with us.
                    </p>
                    <p class="text-md text-white mt-4">
                        Legal and Regulatory Obligations: Our legal and regulatory obligations to retain data.
                    </p>
                    <p class="text-md text-white mt-4">
                        7. International Transfers of Data
                    </p>
                    <p class="text-md text-white mt-4">
                        Your personal information may be transferred and processed in countries other than the one in which you reside. These countries may have data protection laws different from those of your country. However, we will take appropriate measures to ensure that your personal information remains protected in accordance with this privacy policy.
                    </p>
                    <p class="text-md text-white mt-4">
                        8. Changes to the Privacy Policy
                    </p>
                    <p class="text-md text-white mt-4">
                        We reserve the right to modify this privacy policy at any time. Any changes will be posted on this page and, where appropriate, notified to you by email or a prominent notice on our website. We encourage you to regularly review this page to stay informed of any updates.
                    </p>
                    <p class="text-md text-white mt-4">
                        9. Contact
                    </p>
                    <p class="text-md text-white mt-4">
                        For any questions or requests regarding this privacy policy, or to exercise your data protection rights, please contact us at:
                    </p>
                    <p class="text-md text-white mt-4">
                        Email Address: contact@omniscan.com
                    </p>
                    <p class="text-md text-white mt-4">
                        Postal Address: OmniScan, 2 rue Le Corbusier, 13090, Aix-en-Provence, France
                    </p>
                    <p class="text-md text-white mt-4">
                        Effective Date: June 2, 2024
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan Privacy Policy
                    </p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

