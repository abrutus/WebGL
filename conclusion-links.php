<h2>Conclusion &amp; Links</h2>
If your purpose is to link Chemistry to Computer Graphics (and WebGL), I recommend you use libraries that are already out there.
If you rather make your own library, and you have no idea where to start, I suggest the  <a href="http://metamolecular.com/blog/2011/04/13/bond-james-bond/">WebGL for Chemistry</a> simple tutorial.

If you want WebGL for General Use, Check out the <a href="http://code.google.com/p/webglsamples/">samples on Google Code</a> and do the <a href="http://learningwebgl.com/blog/?p=28">Learning WebGL tutorials</a>.

This page relies on data from NIST.gov and the ChemicalBook.com. It uses ChemDoodle API to render .MOL files.

All the mol files used are under the <a href="/data">/data</a> folder. <br/> <br/>
<b><a href="https://github.com/anebg/webGL">GitHub Repo</a> for the whole chemistry.andrebrutus.com site.</b><br/><br/>
Some other cool stuff (from the demo of chemdoodle)<br/>
<script type="text/javascript" src="../data/molecules/2OEY.js"></script>
<script type="text/javascript">
	// setup component
	var cartoonTransformer = new ChemDoodle.TransformCanvas3D('cartoonTransformer', 400, 400);
	// set the ligand atom/bond representation to 'van der Waals Spheres'
	cartoonTransformer.specs.set3DRepresentation('van der Waals Spheres');
	// set the background color to black
	cartoonTransformer.specs.backgroundColor = '#000000';
	// display the atoms and bonds for the nucleic acid...
	cartoonTransformer.specs.macro_displayAtoms = true;
	cartoonTransformer.specs.macro_displayBonds = true;
	// ... but only show nucleic acid atoms within 5 Angstroms of a ligand atom
	cartoonTransformer.specs.macro_atomToLigandDistance = 5;

	// data (pdb_2OEY) is already loaded by the script tag in the header, loading file 2OEY.js
	// this file is a digested and optimized PDB file created by ChemDoodle desktop, it will load much faster than the corresponding PDB file
	var mol = pdb_2OEY;
	// set the residue specs to control the atoms and bonds for the nucleic acid
	mol.residueSpecs = new ChemDoodle.structures.VisualSpecifications();
	// set representation of nucleic acid atoms and bonds to 'Wireframe'
	mol.residueSpecs.set3DRepresentation('Wireframe');
	cartoonTransformer.loadMolecule(mol);
</script>
<br/><br/>
If you need to contact me, abru<a href="http://www.google.com/recaptcha/mailhide/d?k=01M58r3w7BgDuMsHhkaq9D2w==&amp;c=Rrt6Rudn-zcHxZvrlc4kew0NVzvl60KnHj02vQaAwY0=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501M58r3w7BgDuMsHhkaq9D2w\75\75\46c\75Rrt6Rudn-zcHxZvrlc4kew0NVzvl60KnHj02vQaAwY0\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">...</a>@southern.edu
<br />Thank you to:<a href="http://webbook.nist.gov/chemistry/form-ser.html"><img src="images/nist.gif" alt="NIST.gov"/></a>
<script type="text/javascript">
	$(function() {
		$('#nav1').addClass('active');
	});

</script>
