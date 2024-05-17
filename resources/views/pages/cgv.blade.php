@php
    $lang = App::getLocale();
@endphp

<x-app-layout>
    <div id="about-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="mx-auto px-5 container">
            <x-header-page title="{{ __('Terms of Sales') }}" />

            @if($lang === 'fr')
                <div class="content">
                    <p class="text-md text-white">1. Introduction</p>

                    <p class="text-md text-white mt-4">Bienvenue sur OmniScan. Les présentes Conditions Générales de Vente (CGV) régissent l'accès à nos services et leur utilisation, y compris notre outil de scanner de vulnérabilité web. En souscrivant à nos services, vous acceptez de vous conformer et d'être lié par ces conditions, qui s'appliquent à tous les visiteurs, utilisateurs et autres personnes qui accèdent au service ou l'utilisent.</p>

                    <p class="text-md text-white mt-4">2. Description du Service</p>

                    <p class="text-md text-white mt-4">OmniScan propose un outil de scanner de vulnérabilité web qui permet aux utilisateurs de détecter et d'analyser les failles de sécurité de leurs sites web. Nos services sont accessibles via des abonnements mensuels ou annuels, offrant différents niveaux de fonctionnalités selon le forfait choisi.</p>

                    <p class="text-md text-white mt-4">3. Conditions d'Abonnement</p>

                    <p class="text-md text-white mt-4">L'accès aux services d'OmniScan nécessite la souscription à un abonnement. Le choix de l'abonnement peut être modifié à tout moment avec effet à la prochaine période de facturation.</p>

                    <p class="text-md text-white mt-4">a. Abonnement Mensuel : Renouvelé automatiquement chaque mois.</p>
                    <p class="text-md text-white mt-4">b. Abonnement Annuel : Renouvelé automatiquement chaque année à la date anniversaire de la souscription.</p>

                    <p class="text-md text-white mt-4">4. Tarifs et Paiement</p>

                    <p class="text-md text-white mt-4">Les tarifs applicables sont ceux affichés sur notre site au moment de votre souscription. OmniScan se réserve le droit de modifier les prix, mais vous informera de toute modification au moins 30 jours à l'avance. Les paiements sont effectués par carte bancaire ou tout autre moyen indiqué sur notre site au moment de la transaction.</p>

                    <p class="text-md text-white mt-4">5. Politique de Remboursement</p>

                    <p class="text-md text-white mt-4">Un remboursement peut être accordé si aucun scan n’a été lancé depuis la date de souscription ou de renouvellement de l'abonnement. Pour demander un remboursement, contactez notre service clientèle à omniscan@gmail.com dans les 14 jours suivant la souscription ou le renouvellement de l'abonnement.</p>

                    <p class="text-md text-white mt-4">6. Utilisation du Service</p>

                    <p class="text-md text-white mt-4">Vous acceptez d'utiliser notre outil de scanner uniquement pour des sites web dont vous avez la propriété ou pour lesquels vous avez obtenu l'autorisation explicite de réaliser un scan. Vous vous engagez à ne pas utiliser le service à des fins illégales ou non autorisées.</p>

                    <p class="text-md text-white mt-4">7. Propriété Intellectuelle</p>

                    <p class="text-md text-white mt-4">Tous les droits de propriété intellectuelle relatifs au contenu du site et à l'outil de scanner, y compris les textes, graphiques, logos, images et logiciels, sont la propriété exclusive d'OmniScan ou de ses licenciés et sont protégés par les lois françaises et internationales sur le droit d'auteur.</p>

                    <p class="text-md text-white mt-4">8. Limitation de Responsabilité</p>

                    <p class="text-md text-white mt-4">OmniScan ne garantit pas que le service sera exempt d'erreurs ou que les scans seront toujours disponibles. La responsabilité d'OmniScan ne pourra être engagée en cas de dommages indirects résultant de l'utilisation du service.</p>

                    <p class="text-md text-white mt-4">9. Résiliation</p>

                    <p class="text-md text-white mt-4">L'abonnement peut être résilié à tout moment via votre espace client. La résiliation prendra effet à la fin de la période de facturation en cours, après quoi vous ne serez plus facturé.</p>

                    <p class="text-md text-white mt-4">10. Modifications des Conditions</p>

                    <p class="text-md text-white mt-4">OmniScan se réserve le droit de modifier les présentes CGV à tout moment. Les modifications prendront effet immédiatement après leur publication sur notre site. Votre utilisation continue de nos services après toute modification constitue votre acceptation des nouvelles conditions.</p>

                    <p class="text-md text-white mt-4">11. Juridiction et Lois Applicables</p>

                    <p class="text-md text-white mt-4">Ces CGV sont régies et interprétées conformément aux lois françaises. Tout conflit ou réclamation découlant de ou en relation avec ces CGV sera soumis à la compétence exclusive des tribunaux d'Aix-en-Provence.</p>

                    <p class="text-md text-white mt-4">12. Contact</p>

                    <p class="text-md text-white mt-4">Pour toute question ou demande d'informations supplémentaires, veuillez nous contacter à omniscan@gmail.com.</p>
                </div>
            @elseif($lang === 'en')
                <div class="content">
                    <p class="text-md text-white">1. Introduction</p>

                    <p class="text-md text-white mt-4">Welcome to OmniScan. These General Terms and Conditions of Sale (GTC) govern access to and use of our services, including our web vulnerability scanning tool. By subscribing to our services, you agree to comply with and be bound by these terms, which apply to all visitors, users, and others who access or use the service.</p>

                    <p class="text-md text-white mt-4">2. Service Description</p>

                    <p class="text-md text-white mt-4">OmniScan offers a web vulnerability scanning tool that allows users to detect and analyze security flaws in their websites. Our services are available through monthly or annual subscriptions, offering different levels of functionality depending on the chosen plan.</p>

                    <p class="text-md text-white mt-4">3. Subscription Terms</p>

                    <p class="text-md text-white mt-4">Access to OmniScan services requires a subscription. The choice of subscription can be changed at any time with effect at the next billing period.</p>

                    <p class="text-md text-white mt-4">a. Monthly Subscription: Automatically renewed each month.</p>
                    <p class="text-md text-white mt-4">b. Annual Subscription: Automatically renewed each year on the anniversary date of the subscription.</p>

                    <p class="text-md text-white mt-4">4. Rates and Payment</p>

                    <p class="text-md text-white mt-4">The applicable rates are those displayed on our site at the time of your subscription. OmniScan reserves the right to change prices, but will inform you of any changes at least 30 days in advance. Payments are made by credit card or any other means indicated on our site at the time of the transaction.</p>

                    <p class="text-md text-white mt-4">5. Refund Policy</p>

                    <p class="text-md text-white mt-4">A refund may be granted if no scan has been launched since the date of subscription or renewal of the subscription. To request a refund, contact our customer service at omniscan@gmail.com within 14 days following the subscription or renewal of the subscription.</p>

                    <p class="text-md text-white mt-4">6. Use of the Service</p>

                    <p class="text-md text-white mt-4">You agree to use our scanning tool only for websites that you own or for which you have obtained explicit authorization to perform a scan. You agree not to use the service for illegal or unauthorized purposes.</p>

                    <p class="text-md text-white mt-4">7. Intellectual Property</p>

                    <p class="text-md text-white mt-4">All intellectual property rights related to the content of the site and the scanning tool, including texts, graphics, logos, images, and software, are the exclusive property of OmniScan or its licensors and are protected by French and international copyright laws.</p>

                    <p class="text-md text-white mt-4">8. Limitation of Liability</p>

                    <p class="text-md text-white mt-4">OmniScan does not guarantee that the service will be error-free or that scans will always be available. OmniScan's liability shall not be engaged in case of indirect damages resulting from the use of the service.</p>

                    <p class="text-md text-white mt-4">9. Termination</p>

                    <p class="text-md text-white mt-4">The subscription can be terminated at any time via your client space. Termination will take effect at the end of the current billing period, after which you will no longer be billed.</p>

                    <p class="text-md text-white mt-4">10. Modifications to the Conditions</p>

                    <p class="text-md text-white mt-4">OmniScan reserves the right to modify these GTC at any time. Changes will take effect immediately after their publication on our site. Your continued use of our services after any modification constitutes your acceptance of the new conditions.</p>

                    <p class="text-md text-white mt-4">11. Jurisdiction and Applicable Laws</p>

                    <p class="text-md text-white mt-4">These GTC are governed and interpreted in accordance with French laws. Any conflict or claim arising from or related to these GTC will be subject to the exclusive jurisdiction of the courts of Aix-en-Provence.</p>

                    <p class="text-md text-white mt-4">12. Contact</p>

                    <p class="text-md text-white mt-4">For any questions or requests for additional information, please contact us at omniscan@gmail.com.</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
