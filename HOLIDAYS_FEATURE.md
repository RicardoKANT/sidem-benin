# Système de Gestion des Fêtes Internationales

## 📋 Vue d'ensemble

Cette fonctionnalité permet de définir des sliders spécifiques pour les fêtes internationales. Chaque jour, le système vérifie automatiquement si c'est une fête internationale et affiche le slider correspondant à la place des sliders habituels.

## 🎯 Comportement

- **Jour normal** : La page d'accueil affiche tous les sliders dans l'ordre défini
- **Jour de fête** : La page d'accueil affiche **uniquement** le slider assigné à cette fête

## 📁 Fichiers modifiés/créés

### Models
- **`app/Models/Holiday.php`** (créé)
  - Modèle pour gérer les fêtes internationales
  - Relations avec `SliderInfo`
  - Méthodes utilitaires :
    - `getTodayHoliday()` : Récupère la fête d'aujourd'hui
    - `getTodaySlider()` : Récupère le slider d'aujourd'hui

### Controllers
- **`app/Http/Controllers/HomeController.php`** (modifié)
  - Intègre la logique de vérification des fêtes
  - Passe les sliders appropriés à la vue
  
- **`app/Http/Controllers/HolidayController.php`** (créé)
  - CRUD complet pour gérer les fêtes
  - Admin panel pour assigner des sliders aux fêtes

### Database
- **`database/migrations/2026_03_21_081334_create_holidays_table.php`** (créée)
  - Colonnes : `name`, `month`, `day`, `slider_id`
  - Clé étrangère vers `slider_infos`

- **`database/seeders/HolidaySeeder.php`** (créé)
  - Seeder pour peupler les fêtes de démonstration

### Routes
- **`routes/web.php`** (modifié)
  - Ajout des routes CRUD pour les fêtes
  - Endpoint : `/admin/holidays/*`

### Views
- **`resources/views/admins/holidays/index.blade.php`** (créé)
  - Liste toutes les fêtes configurées
  - Affiche la date et le slider associé
  
- **`resources/views/admins/holidays/create.blade.php`** (créé)
  - Formulaire pour assigner une fête à un slider
  - Sélection parmi les fêtes prédéfinies
  
- **`resources/views/admins/holidays/edit.blade.php`** (créé)
  - Formulaire pour modifier l'assignation d'une fête
  
- **`resources/views/admins/holidays/show.blade.php`** (créé)
  - Affiche les détails d'une fête

## 🚀 Utilisation

### 1. **Accéder au panel des fêtes**
```
http://votresite.com/admin/holidays
```

### 2. **Ajouter une fête**
- Cliquez sur "Ajouter une fête"
- Sélectionnez une fête prédéfinie (Noël, Jour de l'an, etc.)
- Choisissez le slider à afficher ce jour
- Validez

### 3. **Modifier une fête**
- Cliquez sur "Éditer" sur la fête
- Changez le slider associé
- Validez

### 4. **Supprimer une fête**
- Cliquez sur "Supprimer" sur la fête
- Confirmez

## 📅 Fêtes prédéfinies

Par défaut, les fêtes suivantes sont disponibles :

| Fête | Date |
|------|------|
| Jour de l'an | 1er janvier |
| Saint Valentin | 14 février |
| Fête du Travail | 1er mai |
| Jour de l'indépendance (USA) | 4 juillet |
| Fête Nationale Bénin | 1er août |
| Halloween | 31 octobre |
| Noël | 25 décembre |

## 🔧 Ajouter des fêtes personnalisées

Pour ajouter vos propres fêtes, modifiez la constante `PREDEFINED_HOLIDAYS` dans `app/Models/Holiday.php` :

```php
public const PREDEFINED_HOLIDAYS = [
    ['name' => 'Ma Fête', 'month' => 6, 'day' => 15],
    // ... etc
];
```

## 🧪 Tester la fonctionnalité

### Via le seeder
```bash
php artisan db:seed --class=HolidaySeeder
```

### Manuellement
1. Créez au moins un slider via `/admin/slider-info`
2. Allez à `/admin/holidays`
3. Assignez une fête au slider
4. Visitez la page d'accueil - le slider de la fête apparaîtra si c'est son jour

## 🔐 Sécurité

- Toutes les routes d'administration sont protégées par `auth`
- Validation complète des données (month 1-12, day 1-31)
- Relation de clé étrangère vers `slider_infos`

## 📊 Structure de la base de données

```sql
CREATE TABLE holidays (
    id BIGINT UNSIGNED PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    month TINYINT UNSIGNED NOT NULL (1-12),
    day TINYINT UNSIGNED NOT NULL (1-31),
    slider_id BIGINT UNSIGNED NOT NULL (FK),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

## 💡 Améliorations futures possibles

- [ ] Gestion des fêtes mobiles (Pâques, Eid, etc.)
- [ ] Affichage des N jours avant/après la fête
- [ ] Design personnalisé par fête
- [ ] Animations spéciales pour les fêtes
- [ ] Historique des changements

## Problèmes possibles et solutions

**Q: Le slider ne change pas le jour de la fête**  
A: Vérifiez que :
1. Une fête est assignée pour cette date
2. Le slider a un `id` valide
3. Les fêtes sont cachées via le seeder ou insérées manuellement

**Q: Comment tester sans attendre le jour réel?**  
A: Modifiez temporairement `Holiday::getTodayHoliday()` en changeant `now()` par une date spécifique :
```php
$today = now()->setMonth(12)->setDay(25); // Noël
```
