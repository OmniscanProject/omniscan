@php
    $lang = App::getLocale();
@endphp

<x-app-layout>
    <div id="privacy-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-center bg-primary">
        <div class="mx-auto px-5 container">
            <x-header-page title="{{ __('Legal notices') }}" />


            @if($lang === 'fr')
                <div class="content">
                    <p class="text-md text-white">
                        1. Informations sur l'éditeur
                    </p>
                    <p class="text-md text-white mt-4">
                        Le site web OmniScan (ci-après « le Site ») est édité par OmniScan, société anonyme au capital de [montant] euros, dont le siège social est situé au 2 rue Le Corbusier, Aix-en-Provence, France, immatriculée au Registre du Commerce et des Sociétés d’Aix-en-Provence sous le numéro [numéro RCS].
                    </p>
                    <p class="text-md text-white mt-4">
                        Directeur de la publication : [Nom du directeur de publication], en sa qualité de [fonction].
                    </p>
                    <p class="text-md text-white mt-4">
                        Contact :
                    </p>
                    <p class="text-md text-white mt-4">
                        Email : omniscan@gmail.com
                    </p>
                    <p class="text-md text-white mt-4">
                        2. Hébergement
                    </p>
                    <p class="text-md text-white mt-4">
                        Le Site est hébergé par Ionos, situé à [adresse complète de l'hébergeur], [pays]. Aucun contact direct n'est fourni pour l'hébergeur dans les mentions légales.
                    </p>
                    <p class="text-md text-white mt-4">
                        3. Propriété intellectuelle
                    </p>
                    <p class="text-md text-white mt-4">
                        Le contenu du Site, incluant de manière non exhaustive les graphiques, images, textes, vidéos, animations, sons, logos, gifs, icônes ainsi que leur mise en forme, sont la propriété exclusive de la société OmniScan, à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.
                    </p>
                    <p class="text-md text-white mt-4">
                        La reproduction, la distribution, la modification, l'adaptation, la retransmission ou la publication de ces différents éléments est strictement interdite sans l'accord écrit préalable d’OmniScan. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. En cas de non-respect de cette interdiction, cela pourrait entraîner des poursuites judiciaires et des sanctions pénales.
                    </p>
                    <p class="text-md text-white mt-4">
                        4. Responsabilités
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan s’efforce de fournir sur le site des informations précises et à jour. Toutefois, l'information diffusée sur le Site ne prétend pas à l'exhaustivité et les documents publiés ne sont pas contractuels. Ces informations sont présentées sous réserve de modifications ayant été apportées depuis leur mise en ligne. OmniScan ne peut garantir l'exactitude, la précision ou l'exhaustivité des informations mises à disposition sur le Site et invite l'utilisateur à contacter directement OmniScan pour obtenir des précisions.
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan ne peut être tenu responsable des erreurs, d’une absence de disponibilité des informations et/ou de la présence de virus sur son site. Les utilisateurs du site doivent donc reconnaître qu'ils utilisent ces informations sous leur responsabilité exclusive.
                    </p>
                    <p class="text-md text-white mt-4">
                        5. Protection des données personnelles
                    </p>
                    <p class="text-md text-white mt-4">
                        Conformément à la loi informatique et libertés en vigueur en France, les données personnelles collectées sur le Site OmniScan sont traitées avec la plus grande confidentialité et sont destinées exclusivement à l'usage d’OmniScan. Les utilisateurs disposent d'un droit d'accès, de rectification, de suppression des données personnelles les concernant et d'opposition à leur traitement. Pour exercer ces droits, les utilisateurs doivent envoyer une demande par courrier électronique à omniscan@gmail.com ou par voie postale à l'adresse 2 rue Le Corbusier, Aix-en-Provence, France, accompagnée d'une copie d'un titre d'identité.
                    </p>
                    <p class="text-md text-white mt-4">
                        6. Liens hypertextes
                    </p>
                    <p class="text-md text-white mt-4">
                        Des liens hypertextes présents sur le Site peuvent orienter les utilisateurs vers des sites externes dont le contenu ne peut en aucune manière engager la responsabilité d’OmniScan. De même, l'établissement de liens hypertextes vers le Site OmniScan, y compris vers la page de présentation, ne nécessite pas d'autorisation préalable et écrite d’OmniScan. OmniScan se réserve néanmoins le droit de demander la suppression d’un lien qu'elle estime non conforme à sa politique éditoriale ou qui pourrait nuire à son image.
                    </p>
                    <p class="text-md text-white mt-4">
                        7. Droit applicable et attribution de juridiction
                    </p>
                    <p class="text-md text-white mt-4">
                        Les présentes mentions légales sont régies par le droit français. Tout différend ou litige qui pourrait naître de l'interprétation ou de l'exécution de ces dernières sera de la compétence exclusive des tribunaux d'Aix-en-Provence, lieu du siège social d’OmniScan.
                    </p>
                    <p class="text-md text-white mt-4">
                        8. Modifications de cette notice
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan se réserve le droit de modifier cette notice à tout moment. Les utilisateurs sont donc invités à consulter régulièrement les dernières mises à jour de cette notice.
                    </p>
                </div>
            @elseif($lang === 'en')
                <div class="content">
                    <p class="text-md text-white">
                        1. Publisher Informations
                    </p>
                    <p class="text-md text-white mt-4">
                        The OmniScan website (hereinafter "the Site") is published by OmniScan, a public limited company with a capital of [amount] euros, whose registered office is located at 2 rue Le Corbusier, Aix-en-Provence, France, registered with the Aix-en-Provence Trade and Companies Register under number [RCS number].
                    </p>
                    <p class="text-md text-white mt-4">
                        Publishing Director: [Name of the publishing director], in his capacity as [position].
                    </p>
                    <p class="text-md text-white mt-4">
                        Contact:
                    </p>
                    <p class="text-md text-white mt-4">
                        Email: omniscan@gmail.com
                    </p>
                    <p class="text-md text-white mt-4">
                        2. Hosting
                    </p>
                    <p class="text-md text-white mt-4">
                        The Site is hosted by Ionos, located at [complete address of the host], [country]. No direct contact is provided for the host in the legal notices.
                    </p>
                    <p class="text-md text-white mt-4">
                        3. Intellectual Property
                    </p>
                    <p class="text-md text-white mt-4">
                        The content of the Site, including but not limited to graphics, images, texts, videos, animations, sounds, logos, gifs, icons as well as their formatting, are the exclusive property of OmniScan company, except for trademarks, logos or content belonging to other partner companies or authors.
                    </p>
                    <p class="text-md text-white mt-4">
                        Reproduction, distribution, modification, adaptation, retransmission or publication of these various elements is strictly prohibited without the prior written consent of OmniScan. This representation or reproduction, by any process whatsoever, constitutes an infringement sanctioned by articles L.335-2 and following of the Intellectual Property Code. In case of non-compliance with this prohibition, it could lead to legal proceedings and criminal sanctions.
                    </p>
                    <p class="text-md text-white mt-4">
                        4. Responsibilities
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan strives to provide accurate and up-to-date information on the site. However, the information disseminated on the Site does not claim to be exhaustive and the published documents are not contractual. This information is presented subject to modifications having been made since they were put online. OmniScan cannot guarantee the accuracy, precision or completeness of the information made available on the Site and invites the user to contact OmniScan directly for further details.
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan cannot be held responsible for errors, a lack of availability of information and/or the presence of viruses on its site. Users of the site must therefore acknowledge that they use this information under their exclusive responsibility.
                    </p>
                    <p class="text-md text-white mt-4">
                        5. Personal Data Protection
                    </p>
                    <p class="text-md text-white mt-4">
                        In accordance with the French Data Protection Act in force, personal data collected on the OmniScan Site are processed with the utmost confidentiality and are intended exclusively for the use of OmniScan. Users have the right to access, rectify, delete their personal data concerning them and to oppose their processing. To exercise these rights, users must send a request by email to omniscan@gmail.com or by post to the address 2 rue Le Corbusier, Aix-en-Provence, France, accompanied by a copy of an identity document.
                    </p>
                    <p class="text-md text-white mt-4">
                        6. Hyperlinks
                    </p>
                    <p class="text-md text-white mt-4">
                        Hyperlinks on the Site may direct users to external sites whose content cannot in any way engage the responsibility of OmniScan. Similarly, the establishment of hyperlinks to the OmniScan Site, including to the presentation page, does not require prior written authorization from OmniScan. However, OmniScan reserves the right to request the removal of a link it deems non-compliant with its editorial policy or that could harm its image.
                    </p>
                    <p class="text-md text-white mt-4">
                        7. Applicable Law and Jurisdiction
                    </p>
                    <p class="text-md text-white mt-4">
                        These legal notices are governed by French law. Any dispute or litigation that may arise from the interpretation or execution of these will be under the exclusive jurisdiction of the courts of Aix-en-Provence, the location of OmniScan's registered office.
                    </p>
                    <p class="text-md text-white mt-4">
                        8. Changes to this Notice
                    </p>
                    <p class="text-md text-white mt-4">
                        OmniScan reserves the right to modify this notice at any time. Users are therefore invited to regularly consult the latest updates to this notice.
                    </p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

