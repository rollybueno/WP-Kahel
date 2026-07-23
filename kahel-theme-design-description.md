# Kahel Theme — AI-Ready Design Description

**Kahel** is a modern WordPress block theme with a warm, energetic, and editorial visual identity inspired by the orange fruit. The name “Kahel” refers to the Filipino word associated with orange, and this connection shapes the theme’s colors, personality, visual rhythm, and overall character.

The theme should feel bright and memorable without becoming loud, childish, tropical, or decorative. Its design combines bold modern typography, generous whitespace, soft rounded shapes, asymmetrical layouts, and restrained orange-centered accents.

## Core identity

Kahel is:

- Warm
- Bold
- Editorial
- Approachable
- Modern
- Minimal but expressive
- Professional without feeling corporate
- Playful without feeling childish
- Designed for WordPress Full Site Editing

The visual language should communicate clarity, creativity, confidence, and human warmth.

## Primary visual direction

Kahel uses large, tightly spaced sans-serif typography as its main visual feature. Headlines are oversized, bold, and compact, with strong negative letter spacing and short line heights.

The theme should avoid traditional serif-led editorial styling. All major headings, statistics, navigation elements, labels, and body content should use a consistent modern sans-serif family.

Recommended font direction:

```text
Inter, Geist, Manrope, Plus Jakarta Sans, or a similar modern variable sans-serif
```

Typography should feel:

- Heavy and confident for headings
- Clean and readable for body copy
- Compact and editorial rather than generic
- Consistent throughout all sections

Typical heading treatment:

```css
font-weight: 800–900;
line-height: 0.92–1;
letter-spacing: -0.05em to -0.075em;
```

Body text should remain comfortable and readable:

```css
font-weight: 400–500;
line-height: 1.55–1.7;
```

## Color system

Orange is the primary brand identity and must remain the strongest accent throughout the theme.

Recommended palette:

```text
Primary orange:      #F47A1F
Deep orange:         #C95212
Soft apricot:        #FFD0A6
Warm cream:          #FFF4E8
Light background:    #FFF8F1
Leaf green:          #557A46
Dark brown ink:      #24170F
Muted body text:     #6F5949
```

Orange should appear in:

- Primary buttons
- Highlighted words
- Eyebrow labels
- Decorative lines
- Statistics
- Icons
- Timeline markers
- Borders
- Small brand details

The page background should generally use warm cream or off-white rather than pure white.

Dark brown should replace pure black for most text and dark surfaces. This keeps the theme warm and connected to the fruit-inspired identity.

Leaf green should be used sparingly as a secondary natural accent, not as an equal competitor to orange.

## Layout philosophy

Kahel uses generous horizontal space and wide content containers, generally around:

```css
max-width: 1180px;
```

Layouts should feel spacious but not empty. Large whitespace should create hierarchy and breathing room.

The theme should frequently use:

- Asymmetric grids
- Alternating vertical offsets
- Large typography
- Wide cards
- Compact supporting copy
- Clear visual rhythm
- Strong but simple section transitions

Avoid overly symmetrical, template-like layouts.

## Hero section

The homepage hero should occupy approximately the first viewport on desktop.

Its structure is:

1. Minimal header
2. Large headline
3. Short supporting paragraph
4. Four feature or process cards visible near the bottom of the viewport

The hero background uses a warm cream base with a very subtle orange glow or radial gradient.

The headline is the dominant element and should use oversized sans-serif type.

Example structure:

```text
Small uppercase eyebrow

Thoughtful websites with a distinctly
Kahel character.

Short supporting paragraph
```

One word or phrase may use orange for emphasis, but it should remain in the same sans-serif typeface.

## Wavy card composition

The hero includes four large cards arranged horizontally.

The cards remain in natural left-to-right order:

```text
1, 2, 3, 4
```

Cards two and four sit slightly lower than cards one and three.

Visual arrangement:

```text
[ Card 1 ]              [ Card 3 ]
           [ Card 2 ]              [ Card 4 ]
```

This creates a gentle alternating wave.

The offset should remain subtle:

```css
margin-top: 22px–42px;
```

The cards should be wide, moderately shallow, and visible within the first desktop viewport.

Card styling:

- Rounded corners around 24–30px
- Soft warm shadows
- Minimal borders
- Large internal padding
- Number and icon at the top
- Heading and short description at the bottom
- Slight hover elevation
- No excessive animation

Recommended card sequence:

```text
Card 1: Primary orange
Card 2: Warm cream
Card 3: Dark brown
Card 4: Soft apricot
```

Orange remains the visual anchor because the first card is the most saturated and prominent.

## Header

The header should be clean and minimal.

Structure:

```text
Brand/logo left
Navigation right
Primary CTA at the end
```

The Kahel brand mark may use a simple abstract orange-fruit symbol with a small leaf detail.

Navigation styling:

- Small modern sans-serif text
- Generous spacing
- No heavy dropdown styling
- Orange pill-shaped CTA
- Thin divider beneath the header

## Results section

The results section appears immediately after the hero.

Its purpose is to communicate measurable impact using large statistics.

Layout:

```text
Left:
Eyebrow
Large section heading

Right:
Short explanation
Primary and secondary links

Below:
Three large statistics in columns
```

Statistics should use oversized sans-serif numbers in orange.

Each statistic includes:

- Thin orange vertical line
- Large orange value
- Short bold label

Example:

```text
87%
Higher reader engagement
```

The section should feel clean, confident, and spacious.

## Process section

The process section uses a split layout.

Left column:

- Small uppercase orange label
- Large heading
- Supporting actions

Right column:

- Four-step vertical timeline

Each timeline step includes:

- Circular orange outline marker
- Thin orange connecting line
- Bold sans-serif heading
- Short supporting paragraph

The timeline should feel clean and editorial, not like a corporate roadmap.

The left introduction may remain sticky on larger screens while the steps appear on the right.

On mobile, everything becomes a normal vertical flow.

## Origin section

The origin section explains the Kahel concept and brand personality.

Layout:

```text
Large visual on the left
Text content on the right
```

The visual should be orange-centered and abstract rather than literal stock photography.

Suitable visual direction:

- Abstract orange fruit
- Rounded organic shape
- Warm gradient
- Soft highlights
- Deep orange shading
- Small green leaf accent
- Minimal composition

The text side includes:

- Orange eyebrow
- Large sans-serif heading
- Short brand story
- Small quality or feature chips
- Primary and secondary actions

The section should explain that Kahel is inspired by orange as something bright, warm, familiar, energetic, and welcoming.

## Buttons and links

Primary buttons:

- Orange background
- Dark brown text
- Rounded pill or softly rounded rectangle
- Strong font weight
- Subtle warm shadow

Secondary buttons:

- Transparent background
- Orange border
- Deep orange text

Text links:

- Deep orange
- Bold
- Small arrow
- Minimal hover movement

Avoid generic black buttons unless used intentionally inside dark sections.

## Shape language

Kahel uses soft geometry.

Preferred shapes:

- Rounded rectangles
- Pills
- Circles
- Organic fruit-inspired forms
- Gentle asymmetry

Typical radius:

```css
border-radius: 12px for buttons;
border-radius: 24px–30px for cards and large media;
```

Avoid excessive blobs, waves, or decorative organic shapes. The fruit influence should be subtle.

## Motion

Motion should be restrained and functional.

Allowed effects:

- Cards lift slightly on hover
- Shadows deepen subtly
- Links shift a few pixels
- Gentle reveal on scroll
- Small icon movement

Avoid:

- Constant floating animation
- Large parallax effects
- Cursor-following elements
- Essential content hidden behind animation
- Excessive page transitions

Always support reduced-motion preferences.

## Responsive behavior

### Desktop

- Four hero cards in one row
- Cards two and four offset downward
- Large headline
- Split layouts for process and origin
- Three-column statistics

### Tablet

- Hero cards become a two-column grid
- Alternating offsets remain subtle
- Split sections may collapse
- Typography scales down fluidly

### Mobile

- Hero cards remain in two columns where space allows
- Cards two and four retain a small offset
- On very narrow screens, cards may stack
- Timeline becomes a normal vertical sequence
- Results statistics stack vertically
- Origin visual and text stack
- No content should depend on hover

The mobile experience should preserve the visual identity without forcing the entire desktop hero into one viewport.


## Footer

The footer should close the page with a stronger, darker expression of the Kahel identity while remaining consistent with the rest of the theme.

Use a deep brown background rather than pure black:

```text
Footer background: #24170F
Primary footer text: #FFF4E8
Muted footer text: rgba(255, 244, 232, 0.60–0.72)
Accent orange: #F47A1F
```

Recommended layout:

```text
Large brand statement on the left
Two compact navigation columns on the right
Bottom row with copyright and utility links
```

The left side should include:

- Kahel logo or fruit-inspired brand mark
- A large closing statement
- A short supporting paragraph
- One orange primary CTA

Example closing statement:

```text
Let’s build something with warmth and character.
```

The heading should use the same heavy, tightly spaced sans-serif treatment as the hero and the other major sections. One word or short phrase may be highlighted in orange.

The navigation columns should remain compact and editorial. Use small uppercase orange labels such as:

- Explore
- Connect
- Resources

Footer links should use warm cream text and shift to orange on hover.

The footer should include a thin divider above the final utility row. The bottom row may contain:

- Copyright
- “Built with WordPress”
- Privacy
- Accessibility
- Style guide

Avoid treating the footer as a generic afterthought. It should feel like the final branded section of the page, with the same typography, spacing, orange emphasis, rounded CTA treatment, and restrained visual language used elsewhere.

### Responsive behavior

On desktop:

- Large statement occupies the wider left column
- Navigation is arranged in two or three narrower columns
- Utility links sit on the same line as the copyright

On tablet:

- The brand statement spans the full width
- Navigation columns sit beneath it

On mobile:

- All footer content stacks vertically
- The CTA remains prominent and easy to tap
- The utility row becomes a simple vertical or wrapped layout

## WordPress implementation

Kahel should be built as a native Full Site Editing theme.

Use:

- `theme.json` for colors, spacing, typography, shadows, borders, and radii
- Core Group blocks for sections and cards
- Grid layouts for responsive card groups
- Columns only where appropriate
- Registered block patterns for complex homepage sections
- Template parts for header and footer
- Minimal custom CSS for asymmetric offsets and special layout behavior

Avoid:

- Page-builder dependencies
- ACF dependencies
- Inline styles whenever possible
- Custom blocks unless core blocks cannot reasonably provide the structure
- Heavy JavaScript for visual effects

The theme should remain editable in the Site Editor while preserving its intended art direction.

## Ideal use cases

Kahel is suitable for:

- Creative studios
- Freelancers
- WordPress developers
- Designers
- Digital agencies
- Personal portfolios
- Editorial businesses
- Small product companies
- Service-based brands
- Modern professional websites

It should be flexible enough for general use while maintaining a distinct orange-centered personality.

## Compact AI prompt

```text
Design a modern WordPress Full Site Editing theme named Kahel.

Kahel is inspired by the orange fruit and uses a warm, bold, editorial visual identity. Orange is the primary brand color, supported by warm cream, soft apricot, deep brown, and a small amount of leaf green.

Use oversized, tightly spaced modern sans-serif typography throughout. Do not use serif fonts for section headings. Headings should feel heavy, compact, confident, and consistent across the hero and all following sections.

The homepage hero should occupy approximately the first desktop viewport and include a minimal header, a large headline, a short supporting paragraph, and four large horizontal cards. The cards remain in left-to-right order, but cards two and four sit slightly lower than cards one and three, creating a gentle alternating wave.

Use this card color sequence:
1. Primary orange
2. Warm cream
3. Deep brown
4. Soft apricot

Follow the hero with three sections:
1. A results section with three oversized orange statistics
2. A process section with a four-step vertical orange timeline
3. An origin section with an abstract orange-fruit visual and a short brand story

Finish the page with a deep-brown footer containing a large closing statement, an orange CTA, compact navigation columns, and a final utility row. Keep the footer typography consistent with the hero and use orange as the main accent.

Use generous whitespace, asymmetric grids, rounded cards, subtle warm shadows, restrained motion, and minimal decorative elements. The design should feel energetic and memorable without becoming childish, tropical, or overly playful.

Build the theme using native WordPress blocks, theme.json, block patterns, template parts, and minimal custom CSS. Prioritize accessibility, responsiveness, performance, and full Site Editor compatibility.
```
