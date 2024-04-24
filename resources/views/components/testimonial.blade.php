@php
   $testimonials = [
    [
        'body' => 'Grâce à ce service, nous avons pu identifier et corriger plusieurs failles de sécurité critiques. Le rapport était clair et précis, et le support client est excellent.',
        'author' => [
            'name' => 'Jordan Marquez',
            'handle' => 'jordanmarquez',
            'imageUrl' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        ],
    ],
    [
        'body' => 'Un outil indispensable pour toute entreprise souhaitant améliorer la sécurité de son site web. Facile à utiliser et les résultats sont fournis rapidement.',
        'author' => [
            'name' => 'Emily Rhyne',
            'handle' => 'emilyrhyne',
            'imageUrl' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        ],
    ],
    [
        'body' => 'Je suis impressionné par la précision des analyses et la facilité avec laquelle nous pouvons comprendre les risques pour notre site. Service client réactif et professionnel.',
        'author' => [
            'name' => 'Miguel Turner',
            'handle' => 'miguelturner',
            'imageUrl' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        ],
    ],
    [
        'body' => 'Après avoir utilisé ce service, notre équipe a pu prendre des mesures proactives pour renforcer nos défenses. Le rapport fourni était détaillé et instructif.',
        'author' => [
            'name' => 'Sophia Lee',
            'handle' => 'sophialee',
            'imageUrl' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        ],
    ],
    [
        'body' => 'Service rapide et fiable. Les rapports sont détaillés et faciles à suivre, ce qui nous a aidé à sécuriser rapidement notre plateforme en ligne.',
        'author' => [
            'name' => 'Lucas Fernandez',
            'handle' => 'lucasfernandez',
            'imageUrl' => 'https://images.unsplash.com/photo-1546525848-3ce03ca516f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        ],
    ],
    [
    'body' => 'Ce service a transformé notre approche de la sécurité en ligne. Grâce aux rapports détaillés et aux recommandations pratiques, nous avons significativement amélioré notre posture de sécurité. Un incontournable pour tout administrateur web soucieux de la sécurité.',
    'author' => [
        'name' => 'Ava Smith',
        'handle' => 'avasmith',
        'imageUrl' => 'https://images.unsplash.com/photo-1524253482453-3fed8d2fe12b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
    ],
]
];
@endphp

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-xl text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Ils ont testé et adopté Omniscan
            </p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                @foreach ($testimonials as $testimonial)
                <div key="{{ $testimonial['author']['handle'] }}" class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                        <blockquote class="text-gray-900">
                            <p>{{ "“{$testimonial['body']}”" }}</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <img class="h-10 w-10 rounded-full bg-gray-50" src="{{ $testimonial['author']['imageUrl'] }}" alt="" />
                            <div>
                                <div class="font-semibold text-gray-900">{{ $testimonial['author']['name'] }}</div>
                                <div class="text-gray-600">{{ '@'.$testimonial['author']['handle'] }}</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>