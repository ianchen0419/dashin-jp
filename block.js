var el=wp.element.createElement;
var InnerBlocks=wp.blockEditor.InnerBlocks;

var PluginDocumentSettingPanel = wp.editPost.PluginDocumentSettingPanel;
var TextControl=wp.components.TextControl;
var ToggleControl=wp.components.ToggleControl;
var select=wp.data.select;
var dispatch=wp.data.dispatch;
var withState=wp.compose.withState;
var withSelect=wp.data.withSelect;

var useSelect=wp.data.useSelect;
var useEntityProp=wp.coreData.useEntityProp;

var InspectorControls=wp.blockEditor.InspectorControls;
var PanelBody=wp.components.PanelBody;
var PanelRow=wp.components.PanelRow;
var BaseControl=wp.components.BaseControl;
var RadioControl=wp.components.RadioControl;
var ToggleControl=wp.components.ToggleControl;
var ButtonGroup=wp.components.ButtonGroup;
var Button=wp.components.Button;

var assign=lodash.assign;


//トップページスライダーギャラリー
wp.blocks.registerBlockStyle(
	'core/group', {
		name: 'slider',
		label: 'トップページスライダー'
	}
)

//メディアとテキスト　ピンク色の付箋紙スタイル
wp.blocks.registerBlockStyle(
	'core/media-text', {
		name: 'rose-sticky',
		label: 'ピンク色の付箋紙'
	}
)

//メディアとテキスト　水色の付箋紙スタイル
wp.blocks.registerBlockStyle(
	'core/media-text', {
		name: 'sky-sticky',
		label: '水色の付箋紙'
	}
)

//メディアとテキスト　丸模様背景強調スタイル
wp.blocks.registerBlockStyle(
	'core/media-text', {
		name: 'radius',
		label: '放射状強調'
	}
)

//画像 水色の影
wp.blocks.registerBlockStyle(
	'core/image', {
		name: 'shadow',
		label: '影付き'
	}
)

//メディアとテキスト 水色の影
wp.blocks.registerBlockStyle(
	'core/media-text', {
		name: 'sky-shadow',
		label: '水色の影'
	}
)

wp.blocks.registerBlockStyle(
	'core/media-text', {
		name: 'rose-shadow',
		label: 'ピンク色の影'
	}
)

//ボタン　素朴なボタン
wp.blocks.registerBlockStyle(
	'core/button', {
		name: 'simple',
		label: '素朴'
	}
)

//カラム　カード式
wp.blocks.registerBlockStyle(
	'core/column', {
		name: 'card',
		label: 'カード式',
	}
)

//段落　3行以上「...」
wp.blocks.registerBlockStyle(
	'core/paragraph', {
		name: 'ellipsis',
		label: '「...」付き',
	}
)

// 上下マージン設定
var withInspectorControls = wp.compose.createHigherOrderComponent(function(BlockEdit) {
	return function(props) {

		var attributes=props.attributes;

		var marginTopSettings=el(
			PanelBody,
			{
				title: 'マージン',
			},
			el(
				BaseControl,
				{
						},
						el(
							ButtonGroup,
							{},
							el(
								Button,
								{
									value: '0',
									isPressed: (props.attributes.margin === '0'),
									isSmall: true,
									onClick: onClickMarginButton,
								},
								'なし',
								),
							el(
								Button,
								{
									value: '20',
									isPressed: (props.attributes.margin === '20'),
									isSmall: true,
									onClick: onClickMarginButton,
								},
								'小'
								),
							el(
								Button,
								{
									value: '40',
									isPressed: (props.attributes.margin === '40'),
									isSmall: true,
									onClick: onClickMarginButton,
								},
								'中'
								),
							el(
								Button,
								{
									value: '60',
									isPressed: (attributes.margin === '60'),
									isSmall: true,
									onClick: onClickMarginButton,
								},
								'大'
								),

							),
						el(
							Button,
							{
								value: '',
								isSmall: true,
								onClick: onClickMarginButton,
							},
							'リセット'
							),
						)
			);

		function onClickMarginButton(ev){
			var marginValue=ev.currentTarget.value;
			if(marginValue==''){
				props.setAttributes({
					margin: marginValue,
					className: '',
				});
			}else{
				props.setAttributes({
					margin: marginValue,
					className: 'margin'+marginValue,
				});
			}

		}

		return el(
			wp.element.Fragment,
			{},
			el(
				BlockEdit,
				props,
				),
			el(
				wp.blockEditor.InspectorControls,
				{initialOpen: false},
				marginTopSettings,
				),
			)


	};
}, 'withInspectorControls');
wp.hooks.addFilter('editor.BlockEdit', 'my-plugin/add-margin', withInspectorControls);

function addAttribute(settings) {
	settings.attributes=assign(settings.attributes, {
		margin: {
			type: 'string',
		},
	} );
	return settings;
}
wp.hooks.addFilter('blocks.registerBlockType', 'my-plugin/add-attr', addAttribute);

//ローディングモーション
wp.plugins.registerPlugin(
	'dashin', 
	{
		render: 
		withSelect
		(function(select) {
			return { heyhey: select('core/editor').getEditedPostAttribute('meta')['loading'] };
		})
		(function(props){
			return el(
				PluginDocumentSettingPanel,
				{
					className: '',
					title: 'ローディングモーション',
				},
				'',
				el(
					ToggleControl,
					{
						checked: select('core/editor').getEditedPostAttribute('meta')['loading'],
						label: 'ローディングモーションをON',
						onChange: function(res){
							dispatch('core/editor').editPost({
								meta: { 'loading': res },
							});
						}
					},
					)
				)
		}),

		icon: '',
	}
);