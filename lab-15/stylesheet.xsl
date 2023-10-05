<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html"/>

    <xsl:template match="/">
        <html>
            <head>
                <title>Movies</title>
            </head>
            <body>
                <h2 style="text-align:center;">Movies</h2>
                <div style="display:flex; flex-wrap:wrap; gap:1rem; justify-content:center;">
                    <xsl:for-each select="movies/movie">
                    <xsl:sort select="name" data-type="text"/>
                    <div style="max-width: 350px; border: 2px solid black; padding:2rem; display:flex; flex-direction:column; align-items:center;">
                        <h3><a name="{generate-id(name)}">
                            <xsl:value-of select="name"/>
                        </a></h3>
                        
                        <img width="300px">
                            <xsl:attribute name="src">
                                <xsl:value-of select="poster/@href"/>
                            </xsl:attribute>
                        </img>
                        <br/>
                        <p>
                            <xsl:value-of select="release"/>
                            | Directed by:
                            <xsl:value-of select="director"/>
                        </p>
                        
                        <p>
                            <xsl:value-of select="description"/>
                        </p>
                    </div>
                </xsl:for-each>
            </div>
            </body>
        </html>    
    </xsl:template>
</xsl:stylesheet>