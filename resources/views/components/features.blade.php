@php
    $features = [
        [
    'name' => 'Évaluation des Vulnérabilités Instantanée',
    'description' => 'Obtenez une évaluation instantanée des vulnérabilités de votre site web dès que vous entrez votre URL. Notre scanner avancé détecte rapidement les failles de sécurité, les configurations erronées et les risques potentiels.',
    'icon' => '', // Icon à modifier quand on aura les nôtres
],
[
    'name' => 'Surveillance Continue',
    'description' => 'Ne vous contentez pas d’un scan unique; optez pour une surveillance continue. Notre service vérifie régulièrement votre site pour détecter de nouvelles vulnérabilités à mesure que votre site évolue et que de nouvelles menaces apparaissent.',
    'icon' => '', // Icon à modifier quand on aura les nôtres
],
[
    'name' => 'Alertes de Sécurités',
    'description' => 'Restez informé avec des alertes de sécurité en temps réel. Nous vous alertons dès qu’une nouvelle vulnérabilité est détectée, vous permettant d’agir rapidement pour sécuriser votre site.',
    'icon' => '', // Icon à modifier quand on aura les nôtres
],
[
    'name' => 'Rapports Détaillés',
    'description' => 'Profitez de rapports détaillés avec des recommandations pratiques pour chaque vulnérabilité identifiée. Nos rapports vous fournissent les informations nécessaires pour prioriser et résoudre les problèmes efficacement.',
    'icon' => '', // Icon à modifier quand on aura les nôtres
],
    ];
@endphp

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Présentation</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Tout ce que vous avez besoin pour avoir l'esprit tranquil
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600">
                Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum
                pulvinar et feugiat blandit at. In mi viverra elit nunc.
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                @foreach ($features as $feature)
                <div key="{{ $feature['name'] }}" class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                        <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                            <i class="{{ $feature['icon'] }} h-6 w-6 text-white" aria-hidden="true"></i>
                        </div>
                        {{ $feature['name'] }}
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">{{ $feature['description'] }}</dd>
                </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>