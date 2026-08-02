# Kahel

Kahel is a native WordPress block theme with a warm, energetic editorial identity. Its name comes from the Filipino word for orange, an influence reflected in its citrus palette, bold typography, generous whitespace, and expressive layouts.

The theme is intended for publishers, writers, creatives, and organizations building blogs, journals, magazines, and other story-driven websites. It provides an art-directed starting point while keeping the site editable with standard WordPress tools.

## Why Kahel?

- Distinctive Filipino-inspired visual identity
- Full Site Editing with the native WordPress Site Editor
- Built with core blocks, without a required page builder or custom-block plugin
- Coordinated templates, template parts, patterns, and global styles
- Responsive editorial layouts with clear hierarchy and readable spacing
- Locally hosted Inter and Source Serif 4 font files
- GPL-licensed and open source

## Requirements

- WordPress 6.7 or newer
- PHP 7.4 or newer

The release build additionally requires Bash, PHP CLI, `zip`, and `unzip`.

## Installation

### From a release ZIP

1. In the WordPress dashboard, open **Appearance > Themes > Add New Theme**.
2. Select **Upload Theme** and choose the generated `kahel-<version>.zip` file.
3. Select **Install Now**, then activate Kahel.
4. Open **Appearance > Editor** to customize the site.

### From the repository

Place or clone this repository at:

```text
wp-content/themes/kahel
```

Then activate **Kahel** from **Appearance > Themes**.

## Theme architecture

```text
kahel/
├── assets/
│   ├── css/main.css        Front-end and editor refinements
│   └── fonts/              Locally hosted fonts and licenses
├── parts/                  Header and footer template parts
├── patterns/               Registered theme patterns
├── templates/              Block templates
├── functions.php           Theme setup and WordPress hooks
├── readme.txt              WordPress.org theme information
├── screenshot.jpg          Theme directory preview image
├── style.css               Theme metadata
└── theme.json              Design tokens, settings, and global styles
```

The `HTML/` directory contains design references and prototypes. It is development material and is not included in release packages.

## Technical details

Kahel uses `theme.json` version 3 as the main design-system layer. It defines the color palette, typography, spacing, layout widths, shadows, element styles, block styles, and template-part metadata used by both the Site Editor and the front end.

The root `style.css` is reserved for the WordPress theme header. Theme CSS that is shared between the editor and front end lives in `assets/css/main.css` and is registered through `functions.php`.

The PHP layer is intentionally small. It:

- Loads the shared stylesheet on the front end and in the editor
- Enables page excerpts
- Registers the Kahel pattern category
- Registers the Accent style for the Quote block
- Prevents automatic excerpts from duplicating content in designated layouts
- Excludes the current post from designated related-content Query Loops

Kahel does not have a Node.js, Composer, page-builder, or custom-block dependency.

## Customization workflow

Use **Appearance > Editor > Styles** for site-wide visual changes such as colors, typography, and layout. Templates and template parts can also be edited directly in the Site Editor.

For theme development:

- Update design tokens and block-level global styles in `theme.json`.
- Add shared CSS refinements to `assets/css/main.css`.
- Add reusable layouts as PHP pattern files in `patterns/`.
- Edit site structures in `templates/` and `parts/`.
- Keep WordPress hooks and narrowly scoped rendering behavior in `functions.php`.

Changes saved through the Site Editor are stored in the WordPress database and can override files from the theme. When developing file-based templates, check for user customizations if an edit does not appear immediately.

## Building a release

Run the build from the repository root:

```bash
./build.sh
```

The script reads the version from `style.css` and creates:

```text
dist/kahel-<version>.zip
```

Before packaging, it:

1. Confirms the required commands and distributable files are available.
2. Ensures the `Stable tag` in `readme.txt` matches the `Version` in `style.css`.
3. Checks `functions.php` for PHP syntax errors.
4. Parses `theme.json` to confirm it contains valid JSON.
5. Copies only the allowlisted production files into a clean `kahel/` directory.
6. Creates and tests the ZIP archive.

The generated archive contains the required top-level `kahel/` directory and can be uploaded through the WordPress dashboard or submitted for WordPress.org theme review. Build output under `dist/` is ignored by Git.

When preparing a release, update both of these values before building:

- `Version` in `style.css`
- `Stable tag` and the changelog in `readme.txt`

## Validation

At minimum, run:

```bash
./build.sh
```

Before publishing, install the resulting ZIP on a clean WordPress site and review it with the Theme Check plugin. Test the front page, posts, pages, archives, navigation, responsive layouts, and Site Editor experience.

## Distribution files

`readme.txt` is the end-user and WordPress.org description shipped with the theme. This `README.md` documents the source repository and development workflow, so it is intentionally excluded from the release ZIP.

## License

Kahel is licensed under the [GNU General Public License v2 or later](LICENSE).

Bundled fonts retain their original SIL Open Font License terms. See the license files under `assets/fonts/` for details.
