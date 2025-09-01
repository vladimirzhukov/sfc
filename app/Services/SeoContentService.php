<?php

namespace App\Services;

use Illuminate\Support\HtmlString;
use DOMDocument;

class SeoContentService
{
    public static function format(string $content, bool $darkMode = true): HtmlString
    {
        return new HtmlString(self::formatSeoContent($content, $darkMode));
    }

    private static function formatSeoContent(string $content, bool $darkMode = true): string
    {
        if (empty($content)) {
            return '';
        }

        // First try the simple regex approach which is more reliable for basic HTML
        $formatted = self::formatSeoContentSimple($content, $darkMode);

        // If the simple approach fails, fall back to DOMDocument
        if (strlen($formatted) < strlen($content) * 0.8) {
            return self::formatSeoContentDOM($content, $darkMode);
        }

        return $formatted;
    }

    private static function formatSeoContentSimple(string $content, bool $darkMode = true): string
    {
        $darkClass = $darkMode ? ' dark:text-white' : '';
        $darkClassGray = $darkMode ? ' dark:text-gray-300' : '';
        $darkClassOrange = $darkMode ? ' dark:text-orange-400 dark:hover:text-orange-300' : '';

        // Define replacements for elements that don't have existing classes
        $replacements = [
            '/<h1(?![^>]*class=)([^>]*)>/i' => '<h1$1 class="text-3xl font-bold text-gray-900' . $darkClass . ' mb-6 leading-tight">',
            '/<h2(?![^>]*class=)([^>]*)>/i' => '<h2$1 class="text-2xl font-bold text-gray-900' . $darkClass . ' mb-5 mt-8 leading-tight">',
            '/<h3(?![^>]*class=)([^>]*)>/i' => '<h3$1 class="text-xl font-bold text-gray-900' . $darkClass . ' mb-4 mt-7 leading-tight">',
            '/<h4(?![^>]*class=)([^>]*)>/i' => '<h4$1 class="text-lg font-semibold text-gray-900' . $darkClass . ' mb-3 mt-6 leading-tight">',
            '/<h5(?![^>]*class=)([^>]*)>/i' => '<h5$1 class="text-base font-semibold text-gray-900' . $darkClass . ' mb-3 mt-5 leading-tight">',
            '/<h6(?![^>]*class=)([^>]*)>/i' => '<h6$1 class="text-sm font-semibold text-gray-900' . $darkClass . ' mb-2 mt-4 leading-tight">',
            '/<p(?![^>]*class=)([^>]*)>/i' => '<p$1 class="text-sm text-gray-700' . $darkClassGray . ' mb-4 leading-relaxed text-base">',
            '/<ul(?![^>]*class=)([^>]*)>/i' => '<ul$1 class="list-disc list-inside text-gray-700' . $darkClassGray . ' mb-4 space-y-2 ml-4">',
            '/<ol(?![^>]*class=)([^>]*)>/i' => '<ol$1 class="list-decimal list-inside text-gray-700' . $darkClassGray . ' mb-4 space-y-2 ml-4">',
            '/<li(?![^>]*class=)([^>]*)>/i' => '<li$1 class="text-sm leading-relaxed">',
            '/<a(?![^>]*class=)([^>]*)>/i' => '<a$1 class="text-sm text-orange-500 hover:text-orange-600' . $darkClassOrange . ' underline transition-colors duration-200">',
            '/<strong(?![^>]*class=)([^>]*)>/i' => '<strong$1 class="font-semibold text-gray-900' . $darkClass . '">',
            '/<em(?![^>]*class=)([^>]*)>/i' => '<em$1 class="italic">',
            '/<blockquote(?![^>]*class=)([^>]*)>/i' => '<blockquote$1 class="border-l-4 border-orange-500 pl-4 py-2 my-4 bg-gray-50' . ($darkMode ? ' dark:bg-gray-800 dark:border-orange-400' : '') . ' italic text-gray-700' . $darkClassGray . '">',
        ];

        // Apply replacements
        foreach ($replacements as $pattern => $replacement) {
            $content = preg_replace($pattern, $replacement, $content);
        }

        return $content;
    }

    private static function formatSeoContentDOM(string $content, bool $darkMode = true): string
    {
        // Wrap content in a div to ensure proper parsing
        $wrappedContent = '<div>' . $content . '</div>';

        // Create a new DOMDocument instance
        $dom = new DOMDocument('1.0', 'UTF-8');

        // Suppress warnings for malformed HTML
        libxml_use_internal_errors(true);

        // Load the HTML content with UTF-8 encoding
        $dom->loadHTML(
            '<?xml encoding="UTF-8">' . $wrappedContent,
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        // Clear libxml errors
        libxml_clear_errors();

        // Define Tailwind classes for different elements
        $elementClasses = [
            'h1' => 'text-3xl font-bold text-gray-900' . ($darkMode ? ' dark:text-white' : '') . ' mb-6 leading-tight',
            'h2' => 'text-2xl font-bold text-gray-900' . ($darkMode ? ' dark:text-white' : '') . ' mb-5 mt-8 leading-tight',
            'h3' => 'text-xl font-bold text-gray-900' . ($darkMode ? ' dark:text-white' : '') . ' mb-4 mt-7 leading-tight',
            'h4' => 'text-lg font-semibold text-gray-900' . ($darkMode ? ' dark:text-white' : '') . ' mb-3 mt-6 leading-tight',
            'h5' => 'text-base font-semibold text-gray-900' . ($darkMode ? ' dark:text-white' : '') . ' mb-3 mt-5 leading-tight',
            'h6' => 'text-sm font-semibold text-gray-900' . ($darkMode ? ' dark:text-white' : '') . ' mb-2 mt-4 leading-tight',
            'p' => 'text-sm text-gray-700' . ($darkMode ? ' dark:text-gray-300' : '') . ' mb-4 leading-relaxed text-base',
            'ul' => 'list-disc list-inside text-gray-700' . ($darkMode ? ' dark:text-gray-300' : '') . ' mb-4 space-y-2 ml-4',
            'ol' => 'list-decimal list-inside text-gray-700' . ($darkMode ? ' dark:text-gray-300' : '') . ' mb-4 space-y-2 ml-4',
            'li' => 'text-sm leading-relaxed',
            'a' => 'text-sm text-orange-500 hover:text-orange-600' . ($darkMode ? ' dark:text-orange-400 dark:hover:text-orange-300' : '') . ' underline transition-colors duration-200',
            'strong' => 'font-semibold text-gray-900' . ($darkMode ? ' dark:text-white' : ''),
            'em' => 'italic',
            'blockquote' => 'border-l-4 border-orange-500 pl-4 py-2 my-4 bg-gray-50' . ($darkMode ? ' dark:bg-gray-800 dark:border-orange-400' : '') . ' italic text-gray-700' . ($darkMode ? ' dark:text-gray-300' : ''),
            'code' => 'bg-gray-100' . ($darkMode ? ' dark:bg-gray-800' : '') . ' px-2 py-1 rounded text-sm font-mono text-gray-800' . ($darkMode ? ' dark:text-gray-200' : ''),
            'pre' => 'bg-gray-100' . ($darkMode ? ' dark:bg-gray-800' : '') . ' p-4 rounded-lg overflow-x-auto mb-4',
            'table' => 'w-full border-collapse border border-gray-300' . ($darkMode ? ' dark:border-gray-600' : '') . ' mb-4',
            'th' => 'border border-gray-300' . ($darkMode ? ' dark:border-gray-600' : '') . ' px-4 py-2 bg-gray-100' . ($darkMode ? ' dark:bg-gray-700' : '') . ' font-semibold text-left',
            'td' => 'border border-gray-300' . ($darkMode ? ' dark:border-gray-600' : '') . ' px-4 py-2',
            'hr' => 'border-0 border-t border-gray-300' . ($darkMode ? ' dark:border-gray-600' : '') . ' my-6',
        ];

        // Function to recursively apply classes to elements
        $applyClasses = function($node) use (&$applyClasses, $elementClasses) {
            if ($node->nodeType === XML_ELEMENT_NODE) {
                $tagName = strtolower($node->nodeName);

                if (isset($elementClasses[$tagName])) {
                    $existingClass = $node->getAttribute('class');
                    $newClass = $existingClass ? $existingClass . ' ' . $elementClasses[$tagName] : $elementClasses[$tagName];
                    $node->setAttribute('class', $newClass);
                }
            }

            // Recursively apply to child nodes
            if ($node->hasChildNodes()) {
                foreach ($node->childNodes as $child) {
                    $applyClasses($child);
                }
            }
        };

        // Apply classes to all elements in the document
        if ($dom->documentElement) {
            $applyClasses($dom->documentElement);
        }

        // Get the formatted HTML from inside the wrapper div
        $formattedContent = '';
        if ($dom->documentElement && $dom->documentElement->firstChild) {
            $wrapperDiv = $dom->documentElement->firstChild;
            if ($wrapperDiv->hasChildNodes()) {
                foreach ($wrapperDiv->childNodes as $node) {
                    $formattedContent .= $dom->saveHTML($node);
                }
            }
        }

        return $formattedContent ?: $content; // Fallback to original content if something goes wrong
    }

    // Debug method to help troubleshoot
    public static function debug(string $content): array
    {
        return [
            'original_length' => strlen($content),
            'original_content' => $content,
            'formatted_content' => self::format($content),
            'formatted_length' => strlen(self::format($content)),
        ];
    }
}
