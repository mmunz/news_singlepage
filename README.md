# news_singlepage
Extends tx_news (TYPO3) with a field to link to a single page uid for detail view content.

This makes it possible to create more spohisticated detail views.

# Installation
Install the extension and add its static TypoScript.

## Usage
Simply select a page in the news entry where content records are stored and
render them in your news detail template, e.g. using vhs:

```
{namespace v=FluidTYPO3\Vhs\ViewHelpers}
<f:if condition="{newsItem.singleContentPid}">
    <v:content.render column="0" pageUid="{newsItem.singleContentPid}" render="1">
        <!-- tag content - may be ignored! -->
    </v:content.render>
</f:if>
```

By using different columns on the single detail page you can render the content in different
parts of the news detail template. For example have another column with index 10 and use that
for the header.


