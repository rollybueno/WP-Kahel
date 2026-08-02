#!/usr/bin/env bash

set -Eeuo pipefail

THEME_SLUG="kahel"
SCRIPT_DIR="$(CDPATH= cd -- "$(dirname -- "${BASH_SOURCE[0]}")" && pwd)"
DIST_DIR="${SCRIPT_DIR}/dist"
STYLE_FILE="${SCRIPT_DIR}/style.css"
README_FILE="${SCRIPT_DIR}/readme.txt"

required_commands=( php zip unzip )
package_paths=(
	LICENSE
	assets
	functions.php
	parts
	patterns
	readme.txt
	screenshot.jpg
	style.css
	templates
	theme.json
)

for command_name in "${required_commands[@]}"; do
	if ! command -v "${command_name}" >/dev/null 2>&1; then
		echo "Error: required command '${command_name}' was not found." >&2
		exit 1
	fi
done

for package_path in "${package_paths[@]}"; do
	if [[ ! -e "${SCRIPT_DIR}/${package_path}" ]]; then
		echo "Error: required package path '${package_path}' was not found." >&2
		exit 1
	fi
done

version="$(sed -n 's/^Version:[[:space:]]*//p' "${STYLE_FILE}" | head -n 1 | tr -d '\r')"
stable_tag="$(sed -n 's/^Stable tag:[[:space:]]*//p' "${README_FILE}" | head -n 1 | tr -d '\r')"

if [[ -z "${version}" ]]; then
	echo "Error: style.css does not contain a Version header." >&2
	exit 1
fi

if [[ "${stable_tag}" != "${version}" ]]; then
	echo "Error: readme.txt Stable tag (${stable_tag:-missing}) does not match theme version (${version})." >&2
	exit 1
fi

php -l "${SCRIPT_DIR}/functions.php" >/dev/null
php -r '
	$json = file_get_contents($argv[1]);
	json_decode($json, true, 512, JSON_THROW_ON_ERROR);
' "${SCRIPT_DIR}/theme.json"

build_dir="$(mktemp -d "${TMPDIR:-/tmp}/${THEME_SLUG}-build.XXXXXX")"
trap 'rm -rf -- "${build_dir}"' EXIT

package_dir="${build_dir}/${THEME_SLUG}"
archive_path="${DIST_DIR}/${THEME_SLUG}-${version}.zip"
mkdir -p "${package_dir}" "${DIST_DIR}"

for package_path in "${package_paths[@]}"; do
	cp -R "${SCRIPT_DIR}/${package_path}" "${package_dir}/"
done

rm -f -- "${archive_path}"
(
	cd "${build_dir}"
	zip -q -r "${archive_path}" "${THEME_SLUG}"
)

unzip -q -t "${archive_path}"

archive_size="$(du -h "${archive_path}" | cut -f 1)"
echo "Built ${archive_path} (${archive_size})"
