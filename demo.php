<?php
/*
ici un 3eme changement pour la branche Modif commentaire
*/

/* 
Model incorrect ******* !!
$classes = 
    [
        'cm1-a' => 
            [
                'nom' => 'pierre',
                'notes' => [
                    15,12,20
                ],
                'nom' => 'alain',
                'notes' => [
                    19,12,20
                ],
                'nom' => 'lucie',
                'notes' => [
                    15,11,9
                ]
            ],
        'cm1-b' => 
            [
                'nom' => 'stefen',
                'notes' => [
                    15,8,20
                ],
                'nom' => 'patrick',
                'notes' => [
                    19,9,8
                ],
                'nom' => 'bruno',
                'notes' => [
                    8,13,9
                ]
            ]
    ]; *****************************/

$classes = [
  'cm1-a' => [
                [
                  'nom' => 'pierre',
                  'notes' => [15, 12, 20]
                ],
                [
                  'nom' => 'alain',
                  'notes' => [19, 12, 20]
                ],
                [
                  'nom' => 'lucie',
                  'notes' => [15, 11, 9]
                ]
  ],
  'cm1-b' => [
                [
                  'nom' => 'stefen',
                  'notes' => [15, 8, 20]
                ],
                [
                  'nom' => 'patrick',
                  'notes' => [19, 9, 8]
                ],
                [
                  'nom' => 'bruno',
                  'notes' => [8, 13, 9]
                ]
  ]
];


?>
<table>
  <thead>
    <tr>
      <th>Classe</th>
      <th>Nom</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($classes as $classe => $eleves) : ?>
      <?php foreach ($eleves as $eleve) : ?>
        <tr>
          <td><?= $classe ?></td>
          <td><?= $eleve['nom'] ?></td>
          <td><?= implode(', ', $eleve['notes']) ?></td>
        </tr>
      <?php endforeach ?>
    <?php endforeach ?>
  </tbody>
</table>