<?php
/**
 * Template part US: header navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unsere-schule
 */

?>

<header id="header-nav" class="navbar">
	<div>
	<a href="<?php echo home_url(); ?>">	
		<div class="sidebar-button">
			<svg class="navbar-logo" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="school" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#F7F7EF" d="M0 224v272c0 8.84 7.16 16 16 16h80V192H32c-17.67 0-32 14.33-32 32zm360-48h-24v-40c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v64c0 4.42 3.58 8 8 8h48c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zm137.75-63.96l-160-106.67a32.02 32.02 0 0 0-35.5 0l-160 106.67A32.002 32.002 0 0 0 128 138.66V512h128V368c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v144h128V138.67c0-10.7-5.35-20.7-14.25-26.63zM320 256c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm288-64h-64v320h80c8.84 0 16-7.16 16-16V224c0-17.67-14.33-32-32-32z"></path></svg>		
			<svg class ="navbar-toggle" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#F7F7EF" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
		</div>
		<span class="site-name">unsere-schule.org</span>
	</a>

	<div class="us-trenner"></div>
	<div class="us-dropdown">
		<span class="us-dropbtn">
			Tools
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill us-dropdown-arrow" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg>
		</span>
		<div class="us-dropdown-content">
			<a href="https://unsere-schule.org/allgemeines/tools/webseitencode-erstellen/">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"></path><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path></svg>
				Codes
			</a>
			<a href="https://digiscreen.unsere-schule.org/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-easel" viewBox="0 0 16 16">
				  <path d="M8 0a.5.5 0 0 1 .473.337L9.046 2H14a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1.85l1.323 3.837a.5.5 0 1 1-.946.326L11.092 11H8.5v3a.5.5 0 0 1-1 0v-3H4.908l-1.435 4.163a.5.5 0 1 1-.946-.326L3.85 11H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4.954L7.527.337A.5.5 0 0 1 8 0zM2 3v7h12V3H2z"/>
				</svg>				
				Digiscreen
			</a>
			<a href="https://zippy.unsere-schule.org/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-zip" viewBox="0 0 16 16">
				  <path d="M6.5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V7.5zm2 0h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243V7.5z"/>
				  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm5.5-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9v1H8v1h1v1H8v1h1v1H7.5V5h-1V4h1V3h-1V2h1V1z"/>
				</svg>
				Zippy
			</a>
			<a href="https://sulkar.uschule.de/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16"><path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/></svg>
				Sulkar
			</a>
			<a href="https://sqlverine.org/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 436.37 188.89" fill="currentColor"><g ><g><path d="M277.93,148.43l68,37.6,48-3.2-29.6-18.4-29.6-19.2-2.4-24.8,14.4-16.8-5.6-9.6,13.6,23.2h28l29.6,11.2,21.6-8-8-28-30.4-41.6-50.4-12-39.2-20h-32L164.33,2l-28,6.4L12.33,86l-9.6,60,80-57.6,2.4-16.8-8,57.6L53.93,170l26.4,3.2,2.4-36.8,25.6,50.4,37.6-1.6-10.4-18.4h-14.4l-.8-18.4,60.8-24,91.2,3.2Q275.14,138,277.93,148.43Z"/><path class="cls-1" d="M376.33,66l-2.4-11.2-14.4-3.2-4,12"/><line class="cls-1" x1="268.47" y1="85.55" x2="272.33" y2="127.63"/></g></g></svg>
				SQLverine
			</a>
			<a href="https://telegraph-buddy.org/" target="_blank" rel="noopener" class="nobr">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 16" fill="currentColor"><g><g><path d="M3,0H13a2,2,0,0,1,2,2V14a2,2,0,0,1-2,2H3a2,2,0,0,1-2-2V13H2v1a1,1,0,0,0,1,1H13a1,1,0,0,0,1-1V2a1,1,0,0,0-1-1H3A1,1,0,0,0,2,2V3H1V2A2,2,0,0,1,3,0Z"/><path d="M1,5V4.5a.5.5,0,0,1,1,0V5h.5a.5.5,0,0,1,0,1H.5a.5.5,0,0,1,0-1ZM1,8V7.5a.5.5,0,0,1,1,0V8h.5a.5.5,0,0,1,0,1H.5a.5.5,0,0,1,0-1Zm0,3v-.5a.5.5,0,0,1,1,0V11h.5a.5.5,0,0,1,0,1H.5a.5.5,0,0,1,0-1Z"/><path d="M6.4,5.81V7.1H7.57v.63H6.4v2.44c0,.56.16.88.61.88A1.7,1.7,0,0,0,7.49,11l0,.62a2.15,2.15,0,0,1-.73.11,1.14,1.14,0,0,1-.89-.35,1.67,1.67,0,0,1-.32-1.17V7.73h-.7V7.1h.7V6Z"/><path d="M9,11.64c0-.25,0-.62,0-1V6.28h.66V8.57h0A1.39,1.39,0,0,1,10.9,7.9c.9,0,1.54.76,1.54,1.87a1.74,1.74,0,0,1-1.64,2A1.28,1.28,0,0,1,9.58,11h0l0,.61Zm.69-1.47a.88.88,0,0,0,0,.24,1,1,0,0,0,1,.78c.7,0,1.11-.56,1.11-1.4s-.37-1.36-1.08-1.36a1,1,0,0,0-1,.82,1,1,0,0,0,0,.27Z"/></g></g></svg>
				telegraph-buddy
			</a>
			<a href="https://unsere-schule.org/programmieren/schuelerapps/" rel="noopener" class="nobr">				
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
				<path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
				<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
				</svg>
				Schülerapps
			</a>
			<a href="https://editor.unsere-schule.org/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16">
				  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
				  <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
				</svg>			
				Code Editor
			</a>
			<a href="https://unsere-schule.org/allgemeines/tools/" target="" rel="noopener">				
				...
			</a>
		</div>
	</div>
	</div>

	<form method="POST" id="myRedirectForm" action="<?php echo home_url() . '/wp-admin/admin-post.php' ?>" class="">
		<div class="searchbox">
			<input id="tempCode" name="search"  placeholder="Code..." onKeyPress="if(this.value.length==8) return false;" autocomplete="off" />
			<input type="hidden" name="action" value="redirectByCode" />
			<span id="searchBtn">			
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F7F7EF" class="bi bi-search" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
				</svg>			
			</span>			
		</div>
	</form>

</header>
