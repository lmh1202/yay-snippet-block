import { __ } from '@wordpress/i18n';

import { useBlockProps } from '@wordpress/block-editor';

import ServerSideRender from '@wordpress/server-side-render';

export default function Edit({ attributes, setAttributes }) {
	const blockProps = useBlockProps();
	// console.log(attributes)
	return (
		<p {...blockProps}>
			<ServerSideRender
				block='create-block/yay-snippet-block'
				attributes={attributes}
			/>
		</ p>
	);
}
